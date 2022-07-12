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
            $sql = "SELECT C.ID, C.IDUsuario,C.IDLibro,C.Contenido,C.Fecha,U.Nombre, U.ID
            FROM comentario C, usuario U
            WHERE C.IDLibro = $id AND U.ID = C.IDUsuario"; 
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function valorar($usuario,$libro,$valor){
            $sql = "INSERT INTO valoracion (IDLibro,IDUsuario,Valoracion) VALUES ('.$libro.','.$usuario.','.$valor.')";
            $this->db->query($sql);
            
        }
        public function mostrarvaloracion($usuario,$libro){
            $sql = "SELECT * FROM valoracion WHERE IDUsuario = $usuario AND IDLibro = $libro";
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function puntuacion($libro){
            $this->db->select_avg('Valoracion');
            $this->db->from('valoracion');
            $this->db->where('IDLibro',$libro); 
            return $this->db->get();
         }
    }
    ?>