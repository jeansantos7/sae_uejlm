


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
           $ocu_Madre =$datos['ocu_Madre'];
           $ocu_Padre =$datos['ocu_Padre'];






           // $datoexiste = $this->Modelo_PadresFamilia->ConsultaExiste($cedula_Estudiante);


                $this->Modelo_PadresFamilia->inserPadresFamilia($ced_Madre, $ced_Padre, $ape_Madre, $ape_Padre, $nom_Madre, $nom_Padre, $telf_Madre, $telf_Padre, $dir_Madre, $dir_Padre, $ocu_Madre, $ocu_Padre);

               

                redirect('/PadresFamilia/padres');
            }
        }
    

    public function delete($id_PadresFamilia) {

        if ($id_PadresFamilia != NULL) {
            $this->Modelo_PadresFamilia->deletePadresFamilia($id_PadresFamilia);
          //  $this->Modelo_RegistroEstudiante->deleteMatricula($cedula_Estudiante);
            echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
            redirect('/PadresFamilia/padres');


        }
    }

    public function edit($id_PadresFamilia = NULL) {


if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretaria') {        

        if ($id_PadresFamilia != NULL) {
            //mostrar datos
            $data['contenido'] = 'PADRESFAMILIA/edit';
          // $data['selEstudiante'] = $this->Modelo_PadresFamilia->selEstudiante();
           // $data['selRepresentante'] = $this->Modelo_PadresFamilia->selRepresentante();
            $data['selPadresFamilia'] = $this->Modelo_PadresFamilia->selPadresFamilia();
            $data['datosPadresFamilia'] = $this->Modelo_PadresFamilia->editPadresFamilia($id_PadresFamilia);
            $data['user'] = $this->session->userdata('username');

            $this->load->view('plantilla_Secretaria', $data);
        } 

    }else {

            redirect('');
        }
    }

  

    public function update() {


        $datos = $this->input->post();

        //$id_PadresFamilia = $datos['id_PadresFamilia'];
       
        print_r($_POST);
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
           $ocu_Madre =$datos['ocu_Madre'];
           $ocu_Padre =$datos['ocu_Padre'];


       $this->Modelo_PadresFamilia->updatePadresFamilia($ced_Madre, $ced_Padre, $ape_Madre, $ape_Padre, $nom_Madre, $nom_Padre, $telf_Madre, $telf_Padre, $dir_Madre, $dir_Padre, $ocu_Madre, $ocu_Padre);

               

                redirect('/PadresFamilia/padres');
            }

}
?> 
