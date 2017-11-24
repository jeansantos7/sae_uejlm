


<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class PadresFamilia extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_PadresFamilia");
    }

    public function padres() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretaria') {
            $data['contenido'] = "PADRESFAMILIA/index";
          
          
              $data['selPadresFamilia'] = $this->Modelo_PadresFamilia->selPadresFamilia();
          
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
          //  $cedula_Estudiante = $datos['cedula_Estudiante'];
           $ced_Madre =$datos['ced_Madre'];
           $ced_Padre =$datos['ced_Padre'];
           $ape_Madre =$datos['ape_Madre'];
           $ape_Padre =$datos['ape_Padre'];
           $nom_Madre =$datos['nom_Madre'];
           $nom_Padre =$datos['nom_Padre'];
           $telf_Madre =$datos['telf_Madre'];
           $telf_Padre =$datos['telf_Padre'];
           $dir_Madre =$datos['dir_Madre'];
           $dir_Padre =$datos['dir_Padre'];
           $ocup_Madre =$datos['ocup_Madre'];
           $ocup_Padre =$datos['ocup_Padre'];






           // $datoexiste = $this->Modelo_PadresFamilia->ConsultaExiste($cedula_Estudiante);


                $this->Modelo_PadresFamilia->inserPadresFamilia($ced_Madre, $ced_Padre, $ape_Madre, $ape_Padre, $nom_Madre, $nom_Padre, $telf_Madre, $telf_Padre, $dir_Madre, $dir_Padre, $ocup_Madre, $ocu_Padre);

               

                redirect('/PadresFamilia/padres');
            }
        }
    

    public function delete($id_PadresFamilia) {

        if ($id_Estudiante != NULL) {
            $this->Modelo_RegistroEstudiante->deleteEstudiante($id_Estudiante);
          //  $this->Modelo_RegistroEstudiante->deleteMatricula($cedula_Estudiante);
            echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
            redirect('/RegistroEstudiante');


        }
    }

    public function edit($id_Estudiante = NULL) {


if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretaria') {        

        if ($id_Estudiante != NULL) {
            //mostrar datos
            $data['contenido'] = 'RegistroEstudiante/edit';
           $data['selEstudiante'] = $this->Modelo_RegistroEstudiante->selEstudiante();
            $data['selRepresentante'] = $this->Modelo_RegistroEstudiante->selRepresentante();
            $data['selPadresFamilia'] = $this->Modelo_RegistroEstudiante->selPadresFamilia();
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
