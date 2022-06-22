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
        $this->db->select('ID, Titulo, Autor, Descripcion');
        $this->db->from('libro');
        $consulta = $this->db->get();
        return $consulta->result();
      }
    }

  ?>