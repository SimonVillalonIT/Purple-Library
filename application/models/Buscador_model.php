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
    }

  ?>