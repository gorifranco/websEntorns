<?php
function alumnesMatriculats(){
$connection = new Mysqli("localhost", "root", "DebianP1Gori", "Matricula", 3306);
$connection->connect();
$sql = "select * from Alumnat";
$result = $connection->query($sql);
    $alumnes = array();
    while ($row = $result->fetch_assoc()) {
        $alumnes[] = $row;
    }
$connection->close();

    return $alumnes;
}

function stringAlumne($alumne){
    $nom = "{$alumne["nom"]} {$alumne["primer_llinatge"]}";
    $nom .= (isset($alumne["segon_llinatge"]))?" {$alumne["segon_llinatge"]}, ":", ";
    $nom .= $alumne["cicle"];
    return $nom;
}
