<?php

/**
 * 
 */
class Pensiones extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_Pensiones");
    }

    public function index() {



        $data['contenido'] = "Pensiones/index";
        $data['listarEstudiante_P'] = $this->Modelo_Pensiones->listarEstudiante_P();
        $data['listarHistorial']= $this->Modelo_Pensiones->listarHistorial();
        $this->load->view("plantilla5", $data);
    }

    public function pago($id_Estudiante = NULL) {

        if ($id_Estudiante != NULL) {
            //mostrar datos
            $data['contenido'] = 'Pensiones/pago';
            //$data['selSecretaria'] = $this->Modelo_Secretaria->selSecretaria();
            $data['datosPensiones'] = $this->Modelo_Pensiones->pagoPensiones($id_Estudiante);
            $this->load->view('plantilla5', $data);
        } else {

            redirect('/Pensiones');
        }
    }

    public function insert() {

        $datos = $this->input->post();

        if (isset($datos)) {
            $cedula_Estudiante_Pensiones = $datos['cedula_Estudiante_Pensiones'];
            $ape_Estudiante_Pensiones = $datos['ape_Estudiante_Pensiones'];
            $nom_Estudiante_Pensiones = $datos['nom_Estudiante_Pensiones'];
            $mes_Pensiones = $datos['mes_Pensiones'];
            $valor_Pensiones = $datos['valor_Pensiones'];
            $fech_Pensiones = $datos['fech_Pensiones'];

            $datoexiste = $this->Modelo_Pensiones->ConsultaExiste($cedula_Estudiante_Pensiones, $mes_Pensiones);
            if ($datoexiste == true) {
                echo '<script languaje="javascript"> alert("este mes ya fue cancelado por este estudiante");
				location.href="../Pensiones";
				</script>';
            } else {
                $this->Modelo_Pensiones->inserPensiones($cedula_Estudiante_Pensiones, $ape_Estudiante_Pensiones, $nom_Estudiante_Pensiones, $mes_Pensiones, $valor_Pensiones, $fech_Pensiones);
                redirect('/Pensiones');
            }
        }
    }

    public function Pensi_insert() {
        $datos = $this->input->post();
        //print_r($datos);
        if (isset($datos)) {

            $cedula_Estudiante_Pensiones = $datos["cedula_Estudiante_Pensiones"];

            $mes_Pensiones = $datos["mes_Pensiones"];
            $valor_de_matricula = $datos["valor_de_matricula"];
            $valor_Pensiones = $datos["valor_Pensiones"];
            $fech_Pensiones = $datos["fech_Pensiones"];
            //print_r($_POST);
            $data = $this->Modelo_Pensiones->ConsultarValores($cedula_Estudiante_Pensiones, $mes_Pensiones);

            if ($data) {
                $total = $this->Modelo_Pensiones->Pensi_update($cedula_Estudiante_Pensiones, $mes_Pensiones, $valor_Pensiones);
                $valortotal = $data[0]->valor_matricula;
                $valor_que_deb = $valortotal - $total;

                header('Content-Type: application/json');
                $datos = array(
                    'Estado' => 'Se actuliza pago',
                    'Mes Actualizado' => $mes_Pensiones,
                    'Valorquedebe' => $valor_que_deb,
                    'valortotal' => $valortotal
                );
            } else {
                $this->Modelo_Pensiones->Pensi_inser($cedula_Estudiante_Pensiones, $valor_de_matricula, $valor_Pensiones, $mes_Pensiones);
                header('Content-Type: application/json');
                $datos = array(
                    'Estado' => 'Se agrega Pago de mes Nuevo',
                    'Mes Agregado' => $mes_Pensiones,
                    'Valorquedebe' => '0'


                );
                
            }

            echo json_encode($datos, JSON_FORCE_OBJECT);

        }
    }

    public function Consultavalores() {
        $datos = $this->input->post();
        $cedula_Estudiante_Pensiones = $datos["cedula_Estudiante_Pensiones"];

        $mes_Pensiones = $datos["id_de_mes"];

        $data = $this->Modelo_Pensiones->ConsultarValores($cedula_Estudiante_Pensiones, $mes_Pensiones);

        if ($data) {
            if ($data[0]->valor_pagado != null  ) {
                $valor_que_deb = $data[0]->valor_matricula - $data[0]->valor_pagado;
            } else {
                $valor_que_deb = $data[0]->valor_matricula;
            }
            $valortotal = $data[0]->valor_matricula;
            header('Content-Type: application/json');
            $datos = array(
                'Estado' => 'ok',
                'Valorquedebe' => $valor_que_deb,
                'valortotal' => $valortotal
                 
            );
        } else {
            header('Content-Type: application/json');
            $datos = array(
                'Estado' => 'ok',
                'Valorquedebe' => "",
                'valortotal' => ""
            );
        }
        echo json_encode($datos, JSON_FORCE_OBJECT);
    }


    public function historial( $id_Estudiante = NULL)
    {

        if( $id_Estudiante != NULL)
        {
            //mostrar datos
            $data['contenido'] = 'Pensiones/historial';
           $data['historialEstudiante']= $this->Modelo_Pensiones->historialEstudiante();
            $data['datosPensiones'] = $this->Modelo_Pensiones->historialEstudiante($id_Estudiante);
            $this->load->view('plantilla5', $data);
        }
        else
        {

            redirect('');
        }


    }


}

?>