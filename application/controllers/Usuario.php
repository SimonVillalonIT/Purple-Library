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

    public function upload(){
        $id = $this->session->userdata("ID");
        if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false){
                $image = $_FILES['image']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));        
            $this->Usuario_model->upload($id,$imgContent);
        
        redirect("Usuario");
            
    }}}

    public function mostrarImagen(){
        $id = $this->session->userdata("ID");
        $img = $this->Usuario_model->download($id);
        header("Content-type: image/jpg"); 
        echo $img[0]->Avatar; 
    }
}

?>