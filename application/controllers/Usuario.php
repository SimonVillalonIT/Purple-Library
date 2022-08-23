<?php
    class Usuario extends CI_controller{
    public function __construct()
    {
        $this->load->library("session");
    }
    
    public function index(){
        
        $this->load->view('Usuario');
    }

}

?>