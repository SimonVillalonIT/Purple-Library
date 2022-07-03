<?php
    class Libro_controller extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('Libro_model');
        }
        
        public function cargarpagina($id){
            $datos['resultado'] = $this->Libro_model->mostrarlibros($id);
            $datos['comentarios'] = $this->Libro_model->mostrarcomentarios($id);
            $this->load->view("Libro_view",$datos);
        }
        public function comentar($id){
            $this->Libro_model->comentar($this->session->userdata('ID'),$id,$this->input->post('comentario'),date("Y/m/d",$timestamp = time()));
            redirect('Libro_controller/cargarpagina/'.$id);
        }
        
    }


?> 