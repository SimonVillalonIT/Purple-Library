<?php
    class Mostrar_libros_model extends CI_Model{
        public function mostrar($id){
            $sql = "SELECT * FROM libro l, categorialibro cl
            WHERE l.ID = cl.IDLibro
            AND cl.IDCategoria 
            IN (SELECT cl.IDCategoria FROM categorialibro cl LEFT JOIN categoriausuario cu 
            ON cl.IDCategoria = cu.IDCategoria WHERE cu.IDUsuario = '$id');";

            $consulta = $this->db->query($sql);
            return $consulta->result();
        }

        public function puntuacion(){
            $sql = "SELECT v.IDLibro, AVG(v.Valoracion) AS Puntaje
            FROM valoracion v
            GROUP BY v.IDLibro;";

            $consulta = $this->db->query($sql);
            return $consulta->result();
        }
        
        public function mejoresvalorados(){
            $sql = "SELECT l.ID,l.Titulo,l.Autor,l.Descripcion,l.img,v.IDLibro, AVG(v.Valoracion) AS Puntaje\n"

    . "            FROM valoracion v, libro l\n"

    . "            WHERE l.ID = v.IDLibro\n"

    . "            GROUP BY v.IDLibro  \n"

    . "ORDER BY `Puntaje` DESC\n"

    . "LIMIT 10;";

        $consulta = $this->db->query($sql);
        return $consulta->result();
        }


    }

?>