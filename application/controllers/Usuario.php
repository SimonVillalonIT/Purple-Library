<?php
class Usuario extends CI_controller
{
    function  __construct()
    {
        parent::__construct();

        // Load cart library
        $this->load->library('session');

        // Load product model
        $this->load->model('Usuario_model');

        $this->load->model("Registro_model");
    }

    public function index()
    {
        $id = $this->session->userdata("ID");
        $datos["user"] = $this->Usuario_model->index($id);

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
}
