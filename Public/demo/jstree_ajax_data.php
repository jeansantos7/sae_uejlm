<?php

$parent = $_REQUEST["parent"];
$valor=$_REQUEST["id"];

$data = array();

$states = array(
    "success",
    "info",
    "danger",
    "warning"
);

$conn = mysqli_connect('localhost', 'root', '', 'bd_sae', '3306');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
mysqli_query($conn, 'SET NAMES \'utf8\'');

$result = mysqli_query($conn, 'SELECT `id_Estudiante`, `matricula_Estudiante`, `ape_Estudiante`, `nom_Estudiante`, `pension_Estudiante` FROM estudiante');
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
    
    $data[] = array(
            "id" => $row['id_Estudiante'],
            "text" => $row['ape_Estudiante']+" "+ $row["nom_Estudiante"],
            "icon" => "fa fa-folder icon-lg icon-state-" . ($states[rand(0, 3)]),
            "children" => true,
            "type" => "root"
        );
    
     
   
}
mysqli_free_result($result);

mysqli_close($conn);


//if ($parent == "#") {
//    for ($i = 1; $i < 3; $i++) {
//        $data[] = array(
//            "id" => "node_" . $i,
//            "text" => "Node #" . $i,
//            "icon" => "fa fa-folder icon-lg icon-state-" . ($states[rand(0, 3)]),
//            "children" => true,
//            "type" => "root"
//        );
//    }
//} else {
//    for ($i = 1; $i <= 2; $i++) {
//        $data[] = array(
//            "id" => "node_" . time() . rand(1, 100000),
//            "icon" => "fa fa-file fa-large icon-state-default",
//            "text" => "No childs ",
//            "state" => array("disabled" => FALSE),
//            "children" => false
//        );
//    }
//}

header('Content-type: text/json');
header('Content-type: application/json');
echo json_encode($data);
?>