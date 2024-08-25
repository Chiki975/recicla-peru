<?php
require_once "../php/conexion.php";


if (isset($_POST['municipalityId'])) {
    $municipalityId = $_POST['municipalityId'];
    $queryresiduo = "SELECT residuos.ResiduosID, residuos.Nombre FROM almacen JOIN residuos ON almacen.ResiduosID = residuos.ResiduosID WHERE almacen.Ubicacion = $municipalityId;";
    $resultresiduo = mysqli_query($link, $queryresiduo);

    $options = '<option disabled selected>Residuo</option>';
    while ($row = mysqli_fetch_assoc($resultresiduo)) {
        $Nombre = $row['Nombre'];
        $ResiduosID = $row['ResiduosID'];
        $options .= '<option value="' . $ResiduosID . '">' . $Nombre . '</option>';
    }

    echo $options;
}
if (isset($_POST['municipalityId2'])) {
    $municipalityId = $_POST['municipalityId2'];
    $querymuni = "SELECT direccion FROM municipalidades where IdMunicipalidades = $municipalityId;";
    $resulmuni = mysqli_query($link, $querymuni);

    $options = '';
    while ($row = mysqli_fetch_assoc($resulmuni)) {
        $direccion = $row['direccion'];
        $options .= '<span>' . $direccion . '</span>';
    }

    echo $options;
}


?>


