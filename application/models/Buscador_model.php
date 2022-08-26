  <?php  
    class Buscador_model extends CI_Model{
      function __construct()
      {
        parent::__construct();
      }  
      public function getPost(){
        return $this->db->get('noticias');
      }
      public function buscar(){
        $this->db->select('ID, Titulo, Autor, Descripcion, img');
        $this->db->from('libro');
        $consulta = $this->db->get();
        return $consulta->result();
      }
      public function mostrarbusqueda($keyword){
        $sql = "SELECT * FROM libro WHERE Titulo LIKE '%$keyword%'";
        $query = $this->db->query($sql);
        return $query->result();
      }
      public function buscar_categoria($id)
    {
      $sql = "SELECT cl.IDLibro,cl.IDCategoria,l.ID,l.Titulo,l.Autor,l.img FROM categorialibro cl, libro l  WHERE cl.IDCategoria = 3 AND l.ID = cl.IDLibro;";
      $query = $this->db->query($sql);
      return $query->result();
    }
    }

  ?>