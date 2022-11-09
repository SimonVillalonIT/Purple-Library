<?php
class Usuario_model extends CI_Model
{
    public function index($id)
    {
        $sql = "SELECT * FROM usuario WHERE ID = " . $id;
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function upload($id, $img)
    {
        $this->db->query("UPDATE usuario SET Avatar = '$img' WHERE ID =" . $id);
    }

    public function download($id)
    {
        $img = $this->db->query("SELECT Avatar FROM usuario WHERE ID =" . $id);
        return $img->result();
    }

    public function obtenerCategorias($id)
    {
        $sql = "SELECT * FROM categoriausuario WHERE IDUsuario = $id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function cambiarNombre($id, $nombre)
    {
        $sql = "UPDATE usuario
            SET Nombre = '$nombre'
            WHERE ID = $id  ";
        $this->db->query($sql);
    }

    public function borrarCategorias($id)
    {
        $sql = "DELETE FROM categoriausuario WHERE IDUsuario = $id";
        $this->db->query($sql);
    }
    public function puntuacion()
    {
        $sql = "SELECT v.IDLibro, AVG(v.Valoracion) AS Puntaje
            FROM valoracion v
            GROUP BY v.IDLibro;";

        $consulta = $this->db->query($sql);
        return $consulta->result();
    }
    public function comentarioPersona($id)
    {
        $sql = "SELECT DISTINCT l.Titulo, l.Autor,l.img,l.Descripcion,l.ID FROM comentario c, libro l WHERE c.IDUsuario = $id AND c.IDLibro = l.ID";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function mostrarValoracionesUsuario($id)
    {
        $sql = "SELECT DISTINCT l.Titulo, l.Autor,l.img,l.Descripcion,l.ID FROM valoracion v, libro l WHERE v.IDUsuario = $id AND v.IDLibro = l.ID ORDER BY valoracion DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function seleccionarEmail($id)
    {
        $sql = "SELECT Email from usuario WHERE ID = $id";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function cambiarEmail($id, $email)
    {
        $sql = "UPDATE usuario SET Email = '$email' WHERE ID = $id";
        $this->db->query($sql);
        return;
    }
    public function seleccionarContrasena($id)
    {
        $sql = "SELECT Contraseña FROM usuario WHERE ID = $id ";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function cambiarContrasena($id, $password)
    {
        $sql = "UPDATE usuario SET Contraseña = '$password' WHERE ID = $id ";
        $this->db->query($sql);
        return;
    }
}
