<?php
class Usuario extends CI_controller
{
    function  __construct()
    {
        parent::__construct();

        $this->load->library('session');

        $this->load->model('Usuario_model');

        $this->load->model("Registro_model");
        
        $this->load->library('form_validation');
        
        $this->load->library('encrypt');
    }
    
    public function index()
    {
        $id = $this->session->userdata("ID");
        $datos["user"] = $this->Usuario_model->index($id);
        $categorias = $this->Usuario_model->obtenerCategorias($id);
        $datos["categorias"] = array();
        $datos['comentario'] = $this->Usuario_model->comentarioPersona($id);
        $datos['valoracion'] = $this->Usuario_model->puntuacion();
        $datos['valoraciones'] = $this->Usuario_model->mostrarValoracionesUsuario($id);
        foreach($categorias as $row){
            array_push($datos["categorias"],$row->IDCategoria);
        }

        $this->load->view('Usuario', $datos);
    }

    public function upload()
    {
        $id = $this->session->userdata("ID");
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                $image = $_FILES['image']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));
                $this->Usuario_model->upload($id, $imgContent);

                redirect("Usuario");
            }
        }
    }

    public function mostrarImagen($id)
    {
        $img = $this->Usuario_model->download($id);

        if (empty($img[0]->Avatar)) {
            header("Content-type: image/jpg");
            readfile(base_url("imgs/iconos/user.png"));
        } else {
            header("Content-type: image/jpg");
            echo $img[0]->Avatar;
        }
    }

    public function cambiarNombreUsuario()
    {
        $id = $this->session->userdata("ID");
        $nombre = $this->input->post("Nombre");
        $this->Usuario_model->cambiarNombre($id, $nombre);
        redirect("Usuario");
    }

    public function modificarCategorias($id)
    {
        $this->Usuario_model->borrarCategorias($id);

        $categorias = $this->input->post('checkbox');

        foreach ($categorias as $valor) {
            $this->Registro_model->insertarcategoria($id, $valor);
        }
        redirect("Usuario");
    }
    public function cambiarEmail($id){


        redirect("Usuario");
    }
    public function cambiarContrasena($id){
        $digesto = $this->Usuario_model->seleccionarContrasena($id);
        $contraseñaVieja = $this->encrypt->decode($digesto[0]->Contraseña);   
            if($contraseñaVieja === $this->input->post('AContraseña')){
            $encrypted_password = $this->encrypt->encode($this->input->post('NContraseña'));
            $this->Usuario_model->cambiarContrasena($id,$encrypted_password);
            redirect("Usuario");}
            else{
                redirect("Usuario");
            }
        }
}
