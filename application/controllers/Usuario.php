<?php
    class Usuario extends CI_controller{
        function  __construct(){
            parent::__construct();
            
            // Load cart library
            $this->load->library('session');
            
            // Load product model
            $this->load->model('Usuario_model');
        }
    
    public function index(){
        $id = $this->session->userdata("ID");
        $datos["user"] = $this->Usuario_model->index($id);
    
        $this->load->view('Usuario',$datos);
    }

}

?>