<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Comprar extends CI_Model{ 
     
    function __construct() { 
        $this->proTable   = 'libro'; 
    } 
     
    /* 
     * Fetch products data from the database 
     * @param id returns a single record if specified, otherwise all records 
     */ 
    public function getRows($id = ''){ 
        $this->db->select('*'); 
        $this->db->from($this->proTable); 
        if($id){ 
            $this->db->where('id', $id); 
            $query = $this->db->get(); 
            $result = $query->row_array(); 
        }else{ 
            $this->db->order_by('Titulo', 'asc'); 
            $query = $this->db->get(); 
            $result = $query->result_array(); 
        } 
         
        // return fetched data 
        return !empty($result)?$result:false; 
    } 
     
}