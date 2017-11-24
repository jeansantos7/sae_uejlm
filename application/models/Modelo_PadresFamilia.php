<?php

/**
 * 
 */
class Modelo_PadresFamilia extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

  

    

    public function selPadresFamilia() {
        $query = $this->db->query("SELECT * FROM padresfamilia");
        return $query->result();
    }

    public function inserPadresFamilia($ced_Madre, $ced_Padre, $ape_Madre, $ape_Padre, $nom_Madre, $nom_Padre, $telf_Madre, 
        $telf_Madre, $telf_Padre, $dir_Madre, $dir_Padre, $ocup_Madre, $ocu_Padre) {
        $array1 = array(
            //	'id_Estudiante' => $id_Estudiante,


           
            //'fech_matricula_Estudiante'=> 			$fech_matricula_Estudiante,
            'ced_Madre' => $ced_Madre,
            'ced_Padre' => $ced_Padre,
             'ape_Madre' => $ape_Madre,
              'ape_Padre' => $ape_Padre,
               'nom_Madre' => $nom_Madre ,
                'nom_Padre' => $nom_Padre,
                 'telf_Madre' => $telf_Madre ,
                  'telf_Padre' =>$telf_Padre ,
                   'dir_Madre' =>$dir_Madre,
                    'dir_Padre' =>$dir_Padre  ,
                     'ocup_Madre' => $ocup_Madre,
                      'ocu_Padre' => $ocu_Padre,

            
        );

      //  $this->db->set('fech_matricula_Estudiante', 'NOW()', FALSE);



        $this->db->insert('padresfamilia', $array1);
    }

   
    public function listarPadresFamilia() {

        $query = $this->db->query("select * from padresfamilia");
        return $query->result();
    }

    public function deletePadresFamilia($id_PadresFamilia) {
        $this->db->where('id_PadresFamilia', $id_PadresFamilia);
        $this->db->delete('padresfamilia');
    }

    
    public function editPadresFamilia($id_PadresFamilia) {
        $query = $this->db->query("select * from padresfamilia where id_PadresFamilia=$id_PadresFamilia");
        return $query->result();
    }

    



    public function updatePadresFamilia ($ced_Madre, $ced_Padre, $ape_Madre, $ape_Padre, $nom_Madre, $nom_Padre, $telf_Madre, 
        $telf_Madre, $telf_Padre, $dir_Madre, $dir_Padre, $ocup_Madre, $ocu_Padre) {
        $array2 = array(
            
            //'id_Estudiante' => $id_Estudiante,
          'ced_Madre' => $ced_Madre,
            'ced_Padre' => $ced_Padre,
             'ape_Madre' => $ape_Madre,
              'ape_Padre' => $ape_Padre,
               'nom_Madre' => $nom_Madre ,
                'nom_Padre' => $nom_Padre,
                 'telf_Madre' => $telf_Madre ,
                  'telf_Padre' =>$telf_Padre ,
                   'dir_Madre' =>$dir_Madre,
                    'dir_Padre' =>$dir_Padre  ,
                     'ocup_Madre' => $ocup_Madre,
                      'ocu_Padre' => $ocu_Padre,
            
        );

        $this->db->where('id_PadresFamilia', $id_PadresFamilia);
        $this->db->update('padresfamilia', $array2);
    }

  

}
?> 
