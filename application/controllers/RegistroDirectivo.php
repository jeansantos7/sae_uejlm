<?php

/**
 * 
 */
class RegistroDirectivo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_RegistroDirectivo");
    }

    public function index() {
        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'administracion') {
            $data['contenido'] = "REGISTRODIRECTIVO/index";
            $data['selDirectivo'] = $this->Modelo_RegistroDirectivo->selDirectivo();
            $data['listarDirectivo'] = $this->Modelo_RegistroDirectivo->listarDirectivo();

            // $data['cedula'] = $this->session->userdata('cedula');
             $data['user'] = $this->session->userdata('username');

            $this->load->view("plantilla_Prueba", $data);
        } else {
            redirect(base_url(''));
        }
    }

    public function insert() {
        $datos = $this->input->post();

        if (isset($datos)) {
            //$id_Directivo = $datos['id_Directivo'];
            $cedula_Directivo = $datos['cedula_Directivo'];
            $ape_Directivo = $datos['ape_Directivo'];
            $nom_Directivo = $datos['nom_Directivo'];
            $telf_Directivo = $datos['telf_Directivo'];
            $correo_Directivo = $datos['correo_Directivo'];
            $direc_Directivo = $datos['direc_Directivo'];
            $fech_nac_Directivo = $datos['fech_nac_Directivo'];
            $user_Directivo = $datos['user_Directivo'];
            $pass_Directivo = $datos['pass_Directivo'];





            $datoexiste = $this->Modelo_Directivo->ConsultaExiste($cedula_Directivo);

            if ($datoexiste == true) {
                echo '<script languaje="javascript"> alert("este Directivo  ya existe");
				location.href="../Directivo";
				</script>';
            } else {

                $this->Modelo_Directivo->inserDirectivo($cedula_Directivo, $ape_Directivo, $nom_Directivo, $telf_Directivo, $correo_Directivo, $direc_Directivo, $fech_nac_Directivo, $user_Directivo, $pass_Directivo);
                redirect('/Directivo');
            }
        }
    }

    public function delete($id_Directivo = NULL) {

        if ($id_Directivo != NULL) {
            $this->Modelo_Directivo->deleteDirectivo($id_Directivo);
            echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
            redirect('/Directivo');
        }
    }

    public function edit($id_Directivo = NULL) {


             if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'administracion') {


       
            //mostrar datos
            $data['contenido'] = 'RegistroDirectivo/edit';
            $data['selDirectivo'] = $this->Modelo_RegistroDirectivo->selDirectivo();
            $data['datosDirectivo'] = $this->Modelo_RegistroDirectivo->editDirectivo($id_Directivo);
             $data['user'] = $this->session->userdata('username');
            $this->load->view('plantilla_Directivo', $data);
        } else {

            redirect('');
        }
    }

    public function update() {


        $datos = $this->input->post();

        //$id_Directivo = $datos['id_Directivo'];
        $cedula_Directivo = $datos['cedula_Directivo'];
        $ape_Directivo = $datos['ape_Directivo'];
        $nom_Directivo = $datos['nom_Directivo'];
        $telf_Directivo = $datos['telf_Directivo'];
        $correo_Directivo = $datos['correo_Directivo'];
        $direc_Directivo = $datos['direc_Directivo'];
        $fech_nac_Directivo = $datos['fech_nac_Directivo'];
        $user_Directivo = $datos['user_Directivo'];
        $pass_Directivo = $datos['pass_Directivo'];

        $this->Modelo_RegistroDirectivo->updateDirectivo($cedula_Directivo, $ape_Directivo, $nom_Directivo, $telf_Directivo, $correo_Directivo, $direc_Directivo, $fech_nac_Directivo, $user_Directivo, $pass_Directivo);

        echo '<script languaje="javascript"> alert("este dato se actualizo"); </script>';

        redirect('/RegistroDirectivo');
    }

}

?>
