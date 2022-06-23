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
        $this->form_validation->set_rules('Nombre', 'Nombre', 'required|trim|is_unique[usuario.Nombre]');
        $this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email|is_unique[usuario.Email]');
        $this->form_validation->set_rules('Contraseña','Contraseña','required');
        $this->form_validation->set_rules('Re-contraseña', 'Password Confirmation', 'trim|required|matches[Contraseña]');
        $this->form_validation->set_message('required', 'Campo requerido');
        $this->form_validation->set_message('is_unique', 'El email ya esta asociado a otra cuenta');
        $this->form_validation->set_message('matches', 'Las contraseñas no coinciden');
        $this->form_validation->set_message('valid_email', 'Debe escribir un e-mail válido');
        
        if ($this->form_validation->run()) 
        {
            $verification_key = md5(rand());
            $encrypted_password = $this->encrypt->encode($this->input->post('Contraseña'));
            $data = array(
                'Nombre'=> $this->input->post('Nombre'),
                'Email'=> $this->input->post('Email'),
                'Contraseña'=> $encrypted_password,
                'verification_key'=> $verification_key,
            );
            
            $id = $this->Registro_model->insertar($data);
            $categorias = $this->input->post('checkbox');
            foreach($categorias as $llave => $valor){
                $this->Registro_model->insertarcategoria($id,$valor);
            }
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
                    'smtp_host' => 'in-v3.mailjet.com',
                    'smtp_port' => 587,
                    'smtp_user' => '5a99d66889a0b7a0f626abddd23722b3',
                    'smtp_pass' => 'af6a9a6baf144197bfe8e654c053866f',
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('simonvillalon9@gmail.com');
                $this->email->to($this->input->post('Email'));
                $this->email->subject($asunto);
                $this->email->message($mensaje);
                if ($this->email->send()) {
                    $this->session->set_flashdata('message','<div id="Verificar"><p>Verifica tu correo donde recibirás el mail de validación</p></div>');
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
                $data['message'] = '<div class="Verificar">
                <h1 aling="center">Tu Email se ha verificado de manera exitosa,
                ahora puedes registrarte <a href="'.base_url().'index.php/Inicio_controller">aquí</a></h1></div>'; 
            }
            else
            {
                $data['message'] ='<div id="error"><h1 align="center">Link Invalido</h1></div>';
            }
        $this->load->view('verificacion_email', $data);
        
    }
}
}
?>


