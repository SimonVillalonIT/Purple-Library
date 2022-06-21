<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('ID')){
            redirect('Inicio');
        }
    }
	public function index()
	{
        $this->load->view('Home_view');
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
