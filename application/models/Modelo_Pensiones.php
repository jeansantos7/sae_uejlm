<?php

/**
 * 
 */
class Modelo_Pensiones extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function listarEstudiante_P() {
        $query = $this->db->query("select * from Estudiante,Matricula where cedula_Estudiante=cedula_estudiante_matricula");
        return $query->result();
    }

    public function pagoPensiones($cedula_Estudiante) {
        $query = $this->db->query("select * from Estudiante where cedula_Estudiante=$cedula_Estudiante");
        return $query->result();
    }

    public function listarMatricula ()
    {
        $query = $this->db->query("select * from Matricula");
        return $query->result();
    }

    public function inserPensiones($cedula_Estudiante_Pensiones, $ape_Estudiante_Pensiones, $nom_Estudiante_Pensiones, $mes_Pensiones, $valor_Pensiones, $fech_Pensiones) {
        $array1 = array(
            'cedula_Estudiante_Pensiones' => $cedula_Estudiante_Pensiones,
            'ape_Estudiante_Pensiones' => $ape_Estudiante_Pensiones,
            'nom_Estudiante_Pensiones' => $nom_Estudiante_Pensiones,
            'mes_Pensiones' => $mes_Pensiones,
            'valor_Pensiones' => $valor_Pensiones,
            'fech_Pensiones' => $fech_Pensiones
        );
        $this->db->insert('Pensiones', $array1);
    }

    public function ConsultaExiste($cedula_Estudiante_Pensiones, $mes_Pensiones) {
        $query = $this->db->query("select * from Pensiones where cedula_Estudiante_Pensiones=$cedula_Estudiante_Pensiones AND mes_Pensiones=$mes_Pensiones ");
        return $query->result();
    }

    public function Pensi_inser($cedula_Estudiante_Pensiones, $valor_de_matricula, $valor_Pensiones, $mes_Pensiones) {
        $array2 = array('id_estudiantes' => $cedula_Estudiante_Pensiones,
            'valor_matricula' => $valor_de_matricula,
            'valor_pagado' => $valor_Pensiones,
            'mes_pagado' => $mes_Pensiones
        );
        $this->db->insert('pensiones', $array2);

        $array3 = array('id_estudiante' => $cedula_Estudiante_Pensiones,
            'id_mes' => $mes_Pensiones,
            'valor_del_pago' => $valor_Pensiones);
        $this->db->set('fecha', 'NOW()', FALSE);
        $this->db->insert('historial_pagos', $array3);
        //echo $this->db->last_query();
    }

    public function Pensi_update($cedula_Estudiante_Pensiones, $mes_Pensiones, $valor_Pensiones) {
        $query = $this->db->query("SELECT valor_pagado FROM pensiones where id_estudiantes=$cedula_Estudiante_Pensiones and mes_pagado=$mes_Pensiones;");
        $data = $query->result();
        $total = $data[0]->valor_pagado + $valor_Pensiones;

        $array2 = array('valor_pagado' => $total);
        $this->db->where('id_estudiantes', $cedula_Estudiante_Pensiones);
        $this->db->where('mes_pagado', $mes_Pensiones);
        $this->db->update('pensiones', $array2);


        $array3 = array('id_estudiante' => $cedula_Estudiante_Pensiones,
            'id_mes' => $mes_Pensiones,
            'valor_del_pago' => $valor_Pensiones);
        $this->db->set('fecha', 'NOW()', FALSE);
        $this->db->insert('historial_pagos', $array3);

        return $total;
    }

    public function ConsultarValores($cedula_Estudiante_Pensiones, $mes_pagado) {
        $query = $this->db->query("SELECT * FROM pensiones where id_estudiantes=$cedula_Estudiante_Pensiones and mes_pagado=$mes_pagado;");
        //print_r("SELECT * FROM penciones where id_estudiantes=$cedula_Estudiante_Pensiones and mes_pagado=$mes_pagado;");
        return $query->result();
    }

    public function listarHistorial() {

        $query = $this->db->query("select * from bd_sae.estudiante,bd_sae.historial_pagos 
where estudiante.cedula_Estudiante=historial_pagos.id_estudiante");
        return $query->result();
    }

    public function historialEstudiante($id_cedula) {

        $query = $this->db->query("SELECT * FROM pensiones where id_estudiantes =".$id_cedula);
        return $query->result();
    }

}

?>
