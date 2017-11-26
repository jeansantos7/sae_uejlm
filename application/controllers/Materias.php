

<?php

/**
 * 
 */
class Materias extends CI_Controller {

    function __construct() {
        # code...
        parent::__construct();
        $this->load->model("Modelo_Materias");
    }

    public function materias() {
        # code...

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretaria') {


            $data['contenido'] = "Materias/materias";
            $data['listarMaterias'] = $this->Modelo_Materias->listarMaterias();
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Secretaria", $data);
        } elseif ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Directivo') {
            $data['contenido'] = "Materias/materias";
            $data['listarMaterias'] = $this->Modelo_Materias->listarMaterias();
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Directivo", $data);
        } else {
            redirect(base_url(''));
        }
    }


        public function insert()
    {
        $datos=$this->input->post();

        if (isset($datos)) {
            $nom_Materias=$datos['nom_Materias'];
            $nom_corto_Materias=$datos['nom_corto_Materias']; 


            $this->Modelo_Materias->inserMaterias( $nom_Materias, $nom_corto_Materias);
            redirect('/Materias/materias');
        }


    }
    public function delete($id_Materias = NULL, $cedula_Estudiante) {

        if ($id_Materias != NULL) {
            $this->Modelo_Materias->deleteMaterias($id_Materias);
          //  $this->Modelo_RegistroEstudiante->deleteMatricula($cedula_Estudiante);
            echo '<script languaje="javascript"> alert("el dato fue eliminado");
            </script>';
            redirect('/Materias/materias');


        }
    }


    public function edit($id_Materias = NULL) {
        # code...

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretaria') {


            $data['contenido'] = "Materias/edit";
            $data['listarMaterias'] = $this->Modelo_Materias->listarMaterias();
            $data['user'] = $this->session->userdata('username');
             $data['datosMaterias'] = $this->Modelo_Materias->editMaterias($id_Materias);
            $this->load->view("plantilla_Secretaria", $data);
        } elseif ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Directivo') {
            $data['contenido'] = "Materias/edit";
            $data['listarMaterias'] = $this->Modelo_Materias->listarMaterias();
            $data['datosMaterias'] = $this->Modelo_Materias->editMaterias($id_Materias);
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Directivo", $data);
        } else {
            redirect(base_url(''));
        }
    }

    public function update()
    {
        $datos = $this->input->post();

        $nom_Materias=$datos['nom_Materias'];
            $nom_corto_Materias=$datos['nom_corto_Materias']; 

            $this->Modelo_Materias->updateMaterias($nom_Materias, $nom_corto_Materias);

             echo '<script languaje="javascript"> alert("este dato se actualizo"); </script>';

        redirect('/Materias/materias');

    }





}
?>