<?php 
    class Usuario_model extends CI_Model{
        public function index($id){
        $sql= "SELECT * FROM usuario WHERE ID = ".$id;
        $query= $this->db->query($sql);
        return $query->result();
    }

    }
?>