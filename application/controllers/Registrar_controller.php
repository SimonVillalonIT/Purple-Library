<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar_controller extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('Registro_model');
    }
    function index()
    {
        $this->load->view('Registro_view');
    }

    function validacion()
    {
        $this->form_validation->set_rules('Nombre', 'Nombre', 'required|trim');
        $this->form_validation->set_rules('Apellido', 'Apellido', 'required|trim');
        $this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email|is_unique[usuario.email]');
        $this->form_validation->set_rules('Contraseña','Contraseña','required');
        if ($this->form_validation->run()) 
        {
            $verification_key = md5(rand());
            $encrypted_password = $this->encrypt->encode($this->input->post('Contraseña'));
            $data = array(
                'Nombre'=> $this->input->post('Nombre'),
                'Apellido'=> $this->input->post('Apellido'),
                'Email'=> $this->input->post('Email'),
                'Contraseña'=> $encrypted_password,
                'verification_key'=> $verification_key,
            );
        
            $id = $this->Registro_model->insertar($data);
            if($id > 0)
            {
                $asunto = "Por favor verifique su email para registrarte";
                $mensaje ="  
                <p>Hola ".$this->input->post('Nombre'). "</p>
                <p>Este es un email de verificación desde Nodecidimoselnombredelapagina. Para completar el registro y iniciar sesion en la pagina. Verifica clickeando en el siguiente <a href='".base_url()."index.php/Registrar_controller/verificar_email/".$verification_key."'>link</a>.</p>
    <p>Una vez que clickees este link tu email será verificado y podrás ingresar al sistema.</p>
    <p>Gracias,</p>
    ";
                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'smtp.mailtrap.io',
                    'smtp_port' => 465,
                    'smtp_user' => '4035ee3691c990',
                    'smtp_pass' => '9a8223bca10025',
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('simonvillalon@alumnos.itr3.edu.ar');
                $this->email->to($this->input->post('Email'));
                $this->email->subject($asunto);
                $this->email->message($mensaje);
                if ($this->email->send()) {
                    $this->session->set_flashdata('message','Verifica tu correo donde recibirás el mail de validación');
                    redirect('Registrar_controller');
                }

            }
        }
        else
        {
            $this->index();
        }
    }
    function verificar_email()
    {
        if($this->uri->segment(3))
        {
            $verification_key = $this->uri->segment(3);
            if($this->Registro_model->verificar_email($verification_key))
            {
                $data['message'] = 
                '<h1 aling="center">Tu Email se ha verificado de manera exitosa,
                ahora puedes registrarte en <a href"'.base_url('index.php/Inicio_controller').'">Aqui</a></h1>'; 
            }
            else
            {
                $data['message'] ='<h1 align="center">Link Invalido</h1>';
            }
        $this->load->view('verificacion_email', $data);
        
    }
}
}
?>
