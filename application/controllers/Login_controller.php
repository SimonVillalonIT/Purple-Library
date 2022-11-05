<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model');
    }

    function index()
    {
        $this->load->view('Inicio_view');
    }

    function validacion()
    {
        $this->form_validation->set_rules('Email','Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('Contraseña', 'Contraseña', 'required');
        $this->form_validation->set_message('required', 'Ingrese todos los datos');
        if ($this->form_validation->run())
        {
            $result = $this->Login_model->can_login($this->input->post('Email'), $this->input->post('Contraseña'));
            if($result == ''){
                redirect('private_area');
            }
            else{
                $this->session->set_flashdata('message',$result);
                redirect('Login_controller');
            }
        }
        else
        {
            $this->index();
        }
    }
  
}

?>