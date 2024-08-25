<?php
include ('conexion.php');

$codigo = $_POST['codigo'];
$dni = $_POST['dni'];
$correo = $_POST['correo'];
$contra = $_POST['contra'];

$query = "SELECT * FROM usuarios WHERE Email = ?";
$stmt = $link->prepare($query);
$stmt->bind_param('s', $correo);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    // Verificar la contraseña
    if (password_verify($contra, $user['Contrasena'])) { // Cambiado a 'contrasena'
        // Generar un código único de 9 dígitos
        do {
            $newCodigo = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 9);
            $query = "SELECT * FROM cajeados WHERE codigo = ?";
            $stmt = $link->prepare($query);
            $stmt->bind_param('s', $newCodigo);
            $stmt->execute();
            $result = $stmt->get_result();
        } while ($result->num_rows > 0);

        $querycanje = "call new_canjear('$dni', '$codigo','$newCodigo')";

        $resultadocanje = mysqli_query($link, $querycanje);
        
        echo json_encode(['mensaje' => $newCodigo]); // Devuelve el nuevo código como un objeto JSON
    } else {
        echo json_encode(['mensaje' => 'Contraseña incorrecta']);
        
    }
} else {
    echo json_encode(['mensaje' => 'Correo no encontrado']);
}

$link->close();
?>