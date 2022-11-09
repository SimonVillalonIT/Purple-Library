<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrar_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Registro_model');
    }
    function index()
    {
        $this->load->view('Registro_view');
    }

    function validacion()
    {
        $this->form_validation->set_rules('Nombre', 'Nombre', 'required|trim|is_unique[usuario.Nombre]', array('is_unique' => 'El nombre de usuario ya esta asociado a otra cuenta'));
        $this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email|is_unique[usuario.Email]');
        $this->form_validation->set_rules('Contraseña', 'Contraseña', 'trim|required|min_length[8]|max_length[15]');
        $this->form_validation->set_rules('Re-contraseña', 'Password Confirmation', 'trim|required|matches[Contraseña]');
        $this->form_validation->set_message('required', 'Campo requerido');
        $this->form_validation->set_message('is_unique', 'El email ya esta asociado a otra cuenta');
        $this->form_validation->set_message('matches', 'Las contraseñas no coinciden');
        $this->form_validation->set_message('valid_email', 'Debe escribir un e-mail válido');
        $this->form_validation->set_message('min_length', 'El largo mínimo de la contraseña es de 8 caracteres');
        $this->form_validation->set_message('max_length', 'El largo máximo de la contraseña es de 15 caracteres');

        if ($this->form_validation->run()) {
            $categorias = $this->input->post('checkbox');
            if (empty($categorias)) {
                $this->session->set_flashdata('message', '<span class="form-error"><p>Debe seleccionar al menos 1 categoría</p></span>');
                return $this->index();
            }
            $verification_key = md5(rand());
            $encrypted_password = password_hash($this->input->post('Contraseña'), PASSWORD_DEFAULT);
            $data = array(
                'Nombre' => $this->input->post('Nombre'),
                'Email' => $this->input->post('Email'),
                'Contraseña' => $encrypted_password,
                'verification_key' => $verification_key,
            );
            $id = $this->Registro_model->insertar($data);

            foreach ($categorias as $llave => $valor) {
                $this->Registro_model->insertarcategoria($id, $valor);
            }
            if ($id > 0) {
                $asunto = "Por favor verifique su email para registrarte";
                $mensaje = "  
                <p>Hola " . $this->input->post('Nombre') . "</p>
                <p>Este es un email de verificación desde Purple. Para completar el registro y iniciar sesion en la pagina. Verifica clickeando en el siguiente <a href='" . base_url() . "index.php/Registrar_controller/verificar_email/" . $verification_key . "'>link</a>.</p>
                <p>Una vez que clickees este link tu email será verificado y podrás ingresar al sistema.</p>
                <p>Gracias</p>
                ";
                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'in-v3.mailjet.com',
                    'smtp_port' => 587,
                    'smtp_user' => '23c07c7545b52c863b9909624b15b5ac',
                    'smtp_pass' => 'fbb879126fbf9cd46ad33d3725b9c1cd',
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('purpleasociados@gmail.com');
                $this->email->to($this->input->post('Email'));
                $this->email->subject($asunto);
                $this->email->message($mensaje);
                if ($this->email->send()) {
                    $this->session->set_flashdata('message', '<div id="Verificar"><p>Verifica tu correo donde recibirás el mail de validación</p></div>');
                    redirect('Registrar_controller');
                }
            }
        } else {
            $this->index();
        }
    }
    function verificar_email()
    {
        if ($this->uri->segment(3)) {
            $verification_key = $this->uri->segment(3);
            if ($this->Registro_model->verificar_email($verification_key)) {
                $data['message'] = '<div class="Verificar">
                <h1 aling="center">Tu Email se ha verificado de manera exitosa,
                ahora puedes registrarte <a href="' . base_url() . 'index.php/Inicio_controller">aquí</a></h1></div>';
            } else {
                $data['message'] = '<div id="error"><h1 align="center">Link Invalido</h1></div>';
            }
            $this->load->view('verificacion_email', $data);
        }
    }
}
