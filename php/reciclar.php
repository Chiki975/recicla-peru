<?php
include ('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dni = $_POST['dni'];
    $municipalidad = $_POST['municipalidad'];
    $residuo = $_POST['residuo'];
    $cantidad = $_POST['cantidad'];

    $query = "CALL ingresoreciclaje	(?, ?, ?, ?)";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, 'siii', $dni, $municipalidad, $residuo, $cantidad);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../admin/admin.php?success=1");
        exit;
    } else {
        // Redirect to admin/admin.php with an error message
        header("Location: ../admin/admin.php?success=0");
        exit;
    }

}
?>