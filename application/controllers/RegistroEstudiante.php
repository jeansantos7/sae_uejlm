


<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class RegistroEstudiante extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_RegistroEstudiante");
    }

    public function index() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretario') {
            $data['contenido'] = "REGISTROESTUDIANTE/index";
            $data['selEstudiante'] = $this->Modelo_RegistroEstudiante->selEstudiante();
            $data['selRepresentante'] = $this->Modelo_RegistroEstudiante->selRepresentante();
            $data['listarEstudiante'] = $this->Modelo_RegistroEstudiante->listarEstudiante();
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Secretaria", $data);
        } else {
            redirect(base_url(''));
        }
    }

    public function insert() {
        $datos = $this->input->post();
        print_r($_POST);
        if (isset($datos)) {
            //$id_Estudiante = $datos['id_Estudiante'];


            
           // $fech_matricula_Estudiante = $datos['fech_matricula_Estudiante'];
            $cedula_Estudiante = $datos['cedula_Estudiante'];
            $ape_Estudiante = $datos['ape_Estudiante'];
            $nom_Estudiante = $datos['nom_Estudiante'];
            $sexo=$datos['sexo'];
            $fech_nac_Estudiante = $datos['fech_nac_Estudiante'];
            $dir_Estudiante = $datos['dir_Estudiante'];
            $carnet_Estudiante = $datos['carnet_Estudiante'];
            $idRepresentante=$datos['idRepresentante'];
            $idMadre=$datos['idMadre'];
             $idPadre=$datos['idPadre'];
           // $parentesco_Estudiante = $datos['parentesco_Representante_Estudiante'];
            $user_Estudiante = $datos['user_Estudiante'];
            $pass_Estudiante = $datos['pass_Estudiante'];
           // $pension_Estudiante = $datos['pension_Estudiante'];
           // $id_Representantes = $datos['id_Representantes'];
            $tipo = "estudiante";




            $datoexiste = $this->Modelo_RegistroEstudiante->ConsultaExiste($cedula_Estudiante);

            if ($datoexiste == true) {
                echo '<script languaje="javascript"> alert("este Estudiante  ya existe");
				location.href="../Estudiante";
				</script>';
            } else {

                $this->Modelo_RegistroEstudiante->inserEstudiante($cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $sexo, $fech_nac_Estudiante, $dir_Estudiante, $carnet_Estudiante,$idRepresentante, $idMadre, $idPadre,  $user_Estudiante, $pass_Estudiante);

                $this->Modelo_RegistroEstudiante->inserUsuario($cedula_Estudiante, $user_Estudiante, $pass_Estudiante, $tipo);


                redirect('/RegistroEstudiante');
            }
        }
    }

    public function delete($id_Estudiante = NULL, $cedula_Estudiante) {

        if ($id_Estudiante != NULL) {
            $this->Modelo_RegistroEstudiante->deleteEstudiante($id_Estudiante);
          //  $this->Modelo_RegistroEstudiante->deleteMatricula($cedula_Estudiante);
            echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
            redirect('/RegistroEstudiante');


        }
    }

    public function edit($id_Estudiante = NULL) {


if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretario') {        

        if ($id_Estudiante != NULL) {
            //mostrar datos
            $data['contenido'] = 'RegistroEstudiante/edit';
          //  $data['selEstudiante'] = $this->Modelo_RegistroEstudiante->selEstudiante();
            //$data['selRepresentante'] = $this->Modelo_RegistroEstudiante->selRepresentante();
            $data['datosEstudiante'] = $this->Modelo_RegistroEstudiante->editEstudiante($id_Estudiante);
            $data['user'] = $this->session->userdata('username');

            $this->load->view('plantilla_Secretaria', $data);
        } 

    }else {

            redirect('');
        }
    }

    public function matricualar($id_Estudiante = NULL)
    {

        if ($id_Estudiante != NULL) {
            //mostrar datos
            $data['contenido'] = 'Estudiante/matriculacion';
             $data['datosEstudiante'] = $this->Modelo_Estudiante->editEstudiante($id_Estudiante);
            $this->load->view('plantilla_Secretaria', $data);
        }

            else {

            redirect('');
        }


    }



    public function update() {


        $datos = $this->input->post();

        //$id_Estudiante = $datos['id_Estudiante'];
       
       
        $cedula_Estudiante = $datos['cedula_Estudiante'];
        $ape_Estudiante = $datos['ape_Estudiante'];
        $nom_Estudiante = $datos['nom_Estudiante'];
        $sexo=$datos['sexo'];
        $fech_nac_Estudiante = $datos['fech_nac_Estudiante'];
        $dir_Estudiante = $datos['dir_Estudiante'];
        $carnet_Estudiante = $datos['carnet_Estudiante'];
        $idRepresentante=$datos['idRepresentante'];
        $idMadre=$datos['idMadre'];
        $idPadre=$datos['idPadre'];
        $user_Estudiante = $datos['user_Estudiante'];
        $pass_Estudiante = $datos['pass_Estudiante'];
       

        $this->Modelo_RegistroEstudiante->updateEstudiante($cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $sexo, 
            $fech_nac_Estudiante, $dir_Estudiante, $carnet_Estudiante, $idRepresentante,$idMadre, $idPadre ,$user_Estudiante, $pass_Estudiante);

        echo '<script languaje="javascript"> alert("este dato se actualizo"); </script>';

        redirect('/RegistroEstudiante');
    }

}
?> 
