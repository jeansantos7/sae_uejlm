<?php

/**
 * 
 */
class RegistroDocente extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_RegistroDocente");
    }

    public function index() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretaria'
        ) {

            $data['contenido'] = "REGISTRODOCENTE/index";
            $data['selDocente'] = $this->Modelo_RegistroDocente->selDocente();
            $data['listarDocente'] = $this->Modelo_RegistroDocente->listarDocente();
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Secretaria", $data);
        } elseif ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Directivo') {
            $data['contenido'] = "REGISTRODOCENTE/index";
            $data['selDocente'] = $this->Modelo_RegistroDocente->selDocente();
            $data['listarDocente'] = $this->Modelo_RegistroDocente->listarDocente();
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Directivo", $data);
        } else {
            redirect(base_url(''));
        }
    }

    public function insert() {
        $datos = $this->input->post();
        print_r($_POST);
        if (isset($datos)) {
            //$id_Docente = $datos['id_Docente'];
            $cedula_Docente = $datos['cedula_Docente'];
            $ape_Docente = $datos['ape_Docente'];
            $nom_Docente = $datos['nom_Docente'];
            $telf_Docente = $datos['telf_Docente'];
            $correo_Docente = $datos['correo_Docente'];
            $direc_Docente = $datos['direc_Docente'];
            $fech_nac_Docente = $datos['fech_nac_Docente'];
            $user_Docente = $datos['user_Docente'];
            $pass_Docente = $datos['pass_Docente'];
            $tipo = "Docente";





            $datoexiste = $this->Modelo_RegistroDocente->ConsultaExiste($cedula_Docente);

            if ($datoexiste == true) {
                echo '<script languaje="javascript"> alert("este docente  ya existe");
				location.href="../Docente";
				</script>';
            } else {

                $this->Modelo_RegistroDocente->inserDocente($cedula_Docente, $ape_Docente, $nom_Docente, $telf_Docente, $correo_Docente, $direc_Docente, $fech_nac_Docente, $user_Docente, $pass_Docente);
                $this->Modelo_RegistroDocente->inserUsuarioDocente($cedula_Docente, $user_Docente, $pass_Docente, $tipo);
                redirect('/RegistroDocente');
            }
        }
    }

    public function delete($id_Docente = NULL) {

        if ($id_Docente != NULL) {
            $this->Modelo_RegistroDocente->deleteDocente($id_Docente);
            echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
            redirect('/Docente');
        }
    }

    public function edit($id_Docente = NULL) {

        if ($id_Docente != NULL) {
            //mostrar datos
            $data['contenido'] = 'REGISTRODocente/edit';
            $data['selDocente'] = $this->Modelo_RegistroDocente->selDocente();
            $data['datosDocente'] = $this->Modelo_RegistroDocente->editDocente($id_Docente);
            $data['user'] = $this->session->userdata('username');

            $this->load->view('plantilla_Secretaria', $data);
        } else {

            redirect('');
        }
    }

    public function update() {


        $datos = $this->input->post();

        //$id_Docente = $datos['id_Docente'];
        $cedula_Docente = $datos['cedula_Docente'];
        $ape_Docente = $datos['ape_Docente'];
        $nom_Docente = $datos['nom_Docente'];
        $telf_Docente = $datos['telf_Docente'];
        $correo_Docente = $datos['correo_Docente'];
        $direc_Docente = $datos['direc_Docente'];
        $fech_nac_Docente = $datos['fech_nac_Docente'];
        $user_Docente = $datos['user_Docente'];
        $pass_Docente = $datos['pass_Docente'];

        $this->Modelo_Docente->updateDocente($cedula_Docente, $ape_Docente, $nom_Docente, $telf_Docente, $correo_Docente, $direc_Docente, $fech_nac_Docente, $user_Docente, $pass_Docente);
        redirect('/Docente');
    }

}

?>
