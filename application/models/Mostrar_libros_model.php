<?php
    class Mostrar_libros_model extends CI_Model{
        public function mostrar($id){
            $sql = "SELECT * FROM libro l, `categoria/libro` cl 
            WHERE l.ID = cl.IDLibro 
            AND cl.IDCategoria 
            IN (SELECT cl.IDCategoria FROM `categoria/libro` cl LEFT JOIN categoriausuario cu 
            ON cl.IDCategoria = cu.IDCategoria WHERE cu.IDUsuario = '$id');";
            
            $consulta = $this->db->query($sql);
            return $consulta->result();
        }
    }

?>