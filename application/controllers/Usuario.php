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
        foreach ($categorias as $row) {
            array_push($datos["categorias"], $row->IDCategoria);
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
        $categorias = $this->input->post('checkbox');

        if (empty($categorias)) {
            $this->session->set_flashdata('message', '<span class="form-error"><p>Debe seleccionar al menos 1 categoría</p></span>');
            redirect("Usuario");
            return;
        }
        $this->Usuario_model->borrarCategorias($id);

        foreach ($categorias as $valor) {
            $this->Registro_model->insertarcategoria($id, $valor);
        }
        redirect("Usuario");
    }
    public function cambiarEmail($id)
    {
        $emailViejo = $this->Usuario_model->seleccionarEmail($id);
        $this->form_validation->set_rules('anteriorCorreo', 'anteriorCorreo', 'trim|required');
        $this->form_validation->set_rules('nuevoCorreo', 'nuevoCorreo', 'trim|required|valid_email|is_unique[usuario.Email]');
        $this->form_validation->set_message('is_unique', 'El email ya esta asociado a otra cuenta');
        $this->form_validation->set_message('valid_email', 'Debe escribir un e-mail válido');

        if ($this->form_validation->run()) {
            if ($emailViejo[0]->Email == $this->input->post("anteriorCorreo")) {
                $this->session->set_flashdata('message', '<span id="Exito"><p>Contraseña cambiada con exito!</p></span>');
                $this->Usuario_model->cambiarEmail($id, $this->input->post("nuevoCorreo"));
                redirect("Usuario");
            } else {
                $this->session->set_flashdata('message', '<span class="form-error"><p>No coinciden!</p></span>');
                redirect("Usuario");
            }
        } else {
            $this->index();
        }
    }
    public function cambiarContrasena($id)
    {
        if ($this->session->userdata("ID")) {
            $this->form_validation->set_rules('AContraseña', 'AContraseña', 'required');
            $this->form_validation->set_rules('ContraseñaNueva', 'ContraseñaNueva', 'trim|required|min_length[8]|max_length[15]');
            $this->form_validation->set_message('required', 'Todos los campos son requeridos');
            $this->form_validation->set_message('min_length', 'El largo mínimo de la contraseña es de 8 caracteres');
            $this->form_validation->set_message('max_length', 'El largo máximo de la contraseña es de 15 caracteres');

            $digesto = $this->Usuario_model->seleccionarContrasena($id);
            $contraseñaVieja = $this->encrypt->decode($digesto[0]->Contraseña);

            if ($contraseñaVieja == $this->input->post('AContraseña')) {
                $encrypted_password = $this->encrypt->encode($this->input->post('ContraseñaNueva'));
                if ($this->form_validation->run()) {
                    $this->session->set_flashdata('message', '<span id="Exito"><p>Contraseña cambiada con exito!</p></span>');
                    $this->Usuario_model->cambiarContrasena($id, $encrypted_password);
                    redirect("Usuario");
                } else {
                    $this->index();
                }
            } else {
                $this->session->set_flashdata('message', '<span class="form-error"><p>No coinciden!</p></span>');
                $this->index();
            }
        } else {
            redirect("Inicio_controller");
        }
    }
}
