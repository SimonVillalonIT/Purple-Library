<?php
    class Libro_model extends CI_Model{
        public function mostrarlibros($id){
            $sql = "SELECT * FROM libro WHERE ID = $id"; 
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function mostrarusuario($id){
            $sql = "SELECT * FROM usuario WHERE ID = $id"; 
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function comentar($usuario,$libro,$comentario,$fecha){
            $this->db->query('INSERT INTO comentario (IDUsuario,IDLibro,Contenido,Fecha) VALUES ('.$usuario.','.$libro.',"'.$comentario.'","'.$fecha.'")');
        }
        public function mostrarcomentarios($id){
            $sql = "SELECT * FROM comentario WHERE IDLibro = $id"; 
            $query = $this->db->query($sql);
            return $query->result();
        }
    }
    ?>