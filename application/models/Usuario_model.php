<?php 
    class Usuario_model extends CI_Model{
        public function index($id){
        $sql= "SELECT * FROM usuario WHERE ID = ".$id;
        $query= $this->db->query($sql);
        return $query->result();
    }
        public function upload($id,$img){
        $this->db->query("UPDATE usuario SET Avatar = '$img' WHERE ID =".$id);
        }
        
        public function download($id){
            $img = $this->db->query("SELECT Avatar FROM usuario WHERE ID =".$id);
            return $img->result();
        }

        public function cambiarNombre($id,$nombre){
            $sql= "UPDATE usuario
            SET Nombre = '$nombre'
            WHERE ID = $id  ";
            $this->db->query($sql);
        }
        
        public function borrarCategorias($id){
            $sql = "DELETE FROM categoriausuario WHERE IDUsuario = $id";
            $this->db->query($sql);
        }
    }
