<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buscador_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Buscador_model");
    }
    public function buscar()
    {
        $query = $this->Buscador_model->buscar();
        echo json_encode($query);
    }
    public function paginabusquedas()
    {
        $palabra = $this->input->post('keyword');
        if (empty($palabra)) {
            $datos['resultado'] = "error";
            $this->load->view('Busquedas_view', $datos);
        } else {
            $datos['resultado'] = $this->Buscador_model->mostrarbusqueda($palabra);
            $this->load->view('Busquedas_view', $datos);
        }
    }
    public function buscar_categoria($id){
        if(empty($id)){
            redirect("Inicio_controller");
        }
        $datos["resultado"]=$this->Buscador_model->buscar_categoria($id);
        $this->load->view('Busquedas_view', $datos);
    }
    
}
