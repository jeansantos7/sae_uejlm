


<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Estudiante extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_Estudiante");
        
    }

    public function index() {

        if ($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') == 'administracion') {
            $data['contenido'] = "ESTUDIANTE/index";
            $data['selEstudiante'] = $this->Modelo_Estudiante->selEstudiante();
            $data['selRepresentante'] = $this->Modelo_Estudiante->selRepresentante();
            $data['listarEstudiante'] = $this->Modelo_Estudiante->listarEstudiante();
            $data['user']=$this->session->userdata('username');
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


            $matricula_Estudiante = $datos['matricula_Estudiante'];
            $fech_matricula_Estudiante = $datos['fech_matricula_Estudiante'];
            $cedula_Estudiante = $datos['cedula_Estudiante'];
            $ape_Estudiante = $datos['ape_Estudiante'];
            $nom_Estudiante = $datos['nom_Estudiante'];
            $fech_nac_Estudiante = $datos['fech_nac_Estudiante'];
            $dir_Estudiante = $datos['dir_Estudiante'];
            $carnet_Estudiante = $datos['carnet_Estudiante'];
            $parentesco_Estudiante = $datos['parentesco_Representante_Estudiante'];
            $user_Estudiante = $datos['user_Estudiante'];
            $pass_Estudiante = $datos['pass_Estudiante'];
            $pension_Estudiante = $datos['pension_Estudiante'];
            $id_Representantes = $datos['id_Representantes'];




            $datoexiste = $this->Modelo_Estudiante->ConsultaExiste($cedula_Estudiante);

            if ($datoexiste == true) {
                echo '<script languaje="javascript"> alert("este Estudiante  ya existe");
				location.href="../Estudiante";
				</script>';
            } else {

                $this->Modelo_Estudiante->inserEstudiante($matricula_Estudiante, $fech_matricula_Estudiante, $cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $fech_nac_Estudiante, $dir_Estudiante, $carnet_Estudiante, $parentesco_Estudiante, $user_Estudiante, $pass_Estudiante, $pension_Estudiante, $id_Representantes);
                redirect('/Estudiante');
            }
        }
    }


    public function insertUsu ()

    {
            
            $datos = $this->input->post();
        print_r($_POST);

        if (isset($datos)) 
        {
            $cedula_Estudiante = $datos['cedula']; 
             $user_Estudiante = $datos['usuario'];
            $pass_Estudiante = $datos['contra'];
           $tipo =$datos["tipo"];

             $datoexiste = $this->Modelo_Estudiante->ConsultaExiste($user_Estudiante);
             if ($datoexiste == true) 
             {
                echo '<script languaje="javascript"> alert("el usuario ya existe");
                location.href="../Estudiante";
                </script>';
            } 

            else
             {
                     $this->Modelo_Estudiante->inserUsuario($cedula_Estudiante, $user_Estudiante, $pass_Estudiante, $tipo);
                }

        }


    }

    public function delete($id_Estudiante = NULL) {

        if ($id_Estudiante != NULL) {
            $this->Modelo_Estudiante->deleteEstudiante($id_Estudiante);
            echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
            redirect('/Estudiante');
        }
    }

    public function edit($id_Estudiante = NULL) {

        if ($id_Estudiante != NULL) {
            //mostrar datos
            $data['contenido'] = 'Estudiante/edit';
            $data['selEstudiante'] = $this->Modelo_Estudiante->selEstudiante();
            $data['selRepresentante'] = $this->Modelo_Estudiante->selRepresentante();
            $data['datosEstudiante'] = $this->Modelo_Estudiante->editEstudiante($id_Estudiante);
            $this->load->view('plantilla_Secretaria', $data);
        } else {

            redirect('');
        }
    }

    public function update() {


        $datos = $this->input->post();

        //$id_Estudiante = $datos['id_Estudiante'];
        $matricula_Estudiante = $datos['matricula_Estudiante'];
        $fech_matricula_Estudiante = $datos['fech_matricula_Estudiante'];
        $cedula_Estudiante = $datos['cedula_Estudiante'];
        $ape_Estudiante = $datos['ape_Estudiante'];
        $nom_Estudiante = $datos['nom_Estudiante'];
        $fech_nac_Estudiante = $datos['fech_nac_Estudiante'];
        $dir_Estudiante = $datos['dir_Estudiante'];
        $carnet_Estudiante = $datos['carnet_Estudiante'];
        $parentesco_Estudiante = $datos['parentesco_Estudiante'];
        $user_Estudiante = $datos['user_Estudiante'];
        $pass_Estudiante = $datos['pass_Estudiante'];
        $pension_Estudiante = $datos['pension_Estudiante'];
        $id_Representantes = $datos['id_Representantes'];

        $this->Modelo_Estudiante->updateEstudiante($matricula_Estudiante, $fech_matricula_Estudiante, $cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $fech_nac_Estudiante, $dir_Estudiante, $carnet_Estudiante, $parentesco_Estudiante, $user_Estudiante, $pass_Estudiante, $pension_Estudiante, $id_Representantes);

        echo '<script languaje="javascript"> alert("este dato se actualizo"); </script>';

        redirect('/Estudiante');
    }

}
?> 
