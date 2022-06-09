<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('Login_model');
    }

    function index()
    {
        $this->load->view('Inicio_view');
    }

    function validacion()
    {
        $this->form_validation->set_rules('Email','Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('Contraseña', 'Password', 'required');

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