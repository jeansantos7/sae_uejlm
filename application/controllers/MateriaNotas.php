<?php

class MateriaNotas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_MateriasNotas");
    }

    function index() {
        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Profesor') {
            $data['contenido'] = "MATERIAS/index";
//            $data['listarEstudiante_P'] = $this->Modelo_Pensiones->listarEstudiante_P();
            //          $data['listarHistorial'] = $this->Modelo_Pensiones->listarHistorial();
            $data['user'] = $this->session->userdata('username');
            $data['cedula'] = $this->session->userdata('id_cedula');
            $data['lista_materias'] = $this->Modelo_MateriasNotas->lista_materias($this->session->userdata('id_cedula'));
            $this->load->view("welcome_message", $data);
        } else {
            redirect(base_url(''));
        }
    }

    function ConsultaAlumnos() {
        //print_r($_POST);
        $datos = $this->input->post();
        if ($datos) {

            $data = $this->Modelo_MateriasNotas->ConsultaAlumnos($datos["id_materia"], $datos["Id_Curso"]);
            echo json_encode($data, JSON_FORCE_OBJECT);
        } else {
            $data = array('error' => 'error');
            echo json_encode($data, JSON_FORCE_OBJECT);
        }
    }
//errer
    function ConsultaAlumnosSub() {
        //print_r($_POST);
        $datos = $this->input->post();
        if ($datos) {

            $data = $this->Modelo_MateriasNotas->ConsultaAlumnosSub($datos["id_materia"], $datos["Id_Curso"]);
            echo json_encode($data, JSON_FORCE_OBJECT);
        } else {
            $data = array('error' => 'error');
            echo json_encode($data, JSON_FORCE_OBJECT);
        }
    }

    function NotasALumnos() {
         //print_r($_POST);
        $datos = $this->input->post();
        if ($datos) {

            for ($i = 1; $i <= $_POST["filas"]; $i++) {
                $valor=$datos["valor"];
                $quimestre = "1";
                $materia = $datos["materia"];
                $curso = $datos["curso"];
                $profesor = $datos["profesor"];
                $cedu = $datos["cedu" . $i];
                $notaparcial1q1 = $datos["notaparcial1q1" . $i];
                $notaparcial2q1 = $datos["notaparcial2q1" . $i];
                $notaparcial3q1 = $datos["notaparcial3q1" . $i];
                $porcentaq1 = $datos["porcentaq1" . $i];
                $notaexamenq1 = $datos["notaexamenq1" . $i];
                $porcentaexamenq1 = $datos["porcentaexamenq1" . $i];
                $promediototalq1 = $datos["promediototalq1" . $i];
                $notaparcial1q2 = $datos["notaparcial1q2" . $i];
                $notaparcial2q2 = $datos["notaparcial2q2" . $i];
                $notaparcial3q2 = $datos["notaparcial3q2" . $i];
                $porcentaq2 = $datos["porcentaq2" . $i];
                $notaexamenq2 = $datos["notaexamenq2" . $i];
                $porcentaexamenq2 = $datos["porcentaexamenq2" . $i];
                $promediototalq2 = $datos["promediototalq2" . $i];
                

//                $data = $this->Modelo_MateriasNotas->InserNotas($quimestre, $materia, $curso
//                        , $profesor, $cedu, $notaParcial1, $notaParcial2, $notaParcial3
//                        , $porcenta, $notaexamen, $porcentaexamen, $promediototal);
                // echo "INSERT INTO cursos(`id_Cursos`) VALUES (".$cedu.");";
                if ($valor == null) {
                    //echo 'Insertar notas q1 promedio';
                   // $this->Modelo_MateriasNotas->InserNotasQ1($cedu, $materia, $curso, $profesor, $promediototal);
                    $data = $this->Modelo_MateriasNotas->InserNotasQ1($quimestre, $materia, $curso
                        , $profesor, $cedu, $notaparcial1q1);
//                 echo 'insert';
//                    print_r($datos);
                } elseif ($valor = 1) {
                    //$this->Modelo_MateriasNotas->UpdateNotasQ2($cedu, $promediototal);
                    //echo 'actuliza';
                   // print_r($datos);
                    $data = $this->Modelo_MateriasNotas->InserNotasQ2($quimestre, $materia, $curso
                        , $profesor, $cedu, $notaparcial1q1, $notaparcial2q1, $notaparcial3q1
                        , $porcentaq1, $notaexamenq1, $porcentaexamenq1, $promediototalq1,$notaparcial1q2,
                         $notaparcial2q2,$notaparcial3q2,$porcentaq2,$notaexamenq2,$porcentaexamenq2,$promediototalq2);
                }
            }
//


            //$data = $this->Modelo_MateriasNotas->ConsultaAlumnos($datos["id_materia"],$datos["Id_Curso"]);
            // echo json_encode($data, JSON_FORCE_OBJECT);
          redirect('/MateriaNotas');
        } else {
            $data = array('error' => 'error');
            echo json_encode($data, JSON_FORCE_OBJECT);
        }
    }

    function NotasALumnossup() {
        //print_r($_POST);
        $datos = $this->input->post();
        if ($datos) {
            $cedu = $datos["cedula"];
            $materia = $datos["materia"];
            $curso = $datos["curso"];
            $profesor = $datos["profesor"];


            if ($datos["suple"] != null && $datos["suple"] != "" && $datos["remedial"] == null && $datos["examegracia"] == null) {
                $this->Modelo_MateriasNotas->inserSup($cedu, $materia, $curso, $profesor, $datos["suple"]);
                echo 'Exito';

                //  echo 'Suple' . $datos["suple"];
            } elseif ($datos["remedial"] != null && $datos["remedial"] != "" && $datos["suple"] == null && $datos["examegracia"] == null) {
                $this->Modelo_MateriasNotas->UpSup($cedu, $materia, $curso, $profesor, $datos["remedial"]);
                //echo 'remedial' . $datos["remedial"];
                echo 'Exito';
            } elseif ($datos["examegracia"] != null && $datos["examegracia"] != "" && $datos["remedial"] == null && $datos["suple"] == null) {
                $this->Modelo_MateriasNotas->UpSup2($cedu, $materia, $curso, $profesor, $datos["examegracia"]);
                //echo 'examegracia' . $datos["examegracia"];
                echo 'Exito';
            } else {
                echo 'Solo Un Campo';
            }
        } else {
            echo 'Error';
        }
    }

}
