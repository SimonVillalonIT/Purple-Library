<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mostrar_libros_model');
        if(!$this->session->userdata('ID')){
            redirect('Inicio');
        }
    }
	public function index()
	{
        $id = $this->session->userdata('ID');
        $datos['recomendacion'] = $this->Mostrar_libros_model->mostrar($id);
        $this->load->view('Home_view',$datos);
	}

    function logout(){
        $data = $this->session->all_userdata();
        foreach($data as $row => $rows_value){
            $this->session->unset_userdata($row);
        }
        redirect('Inicio_controller');
    }
   
}
    

?>
