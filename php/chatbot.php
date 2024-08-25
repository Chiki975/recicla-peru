<?php
include ('conexion.php');
session_start();

// Función para obtener respuesta según la pregunta
function obtenerRespuesta($pregunta) {
    global $link;

    if ('cuantos puntos tengo' === $pregunta) {
        // Si la pregunta incluye 'cuántos puntos tengo', buscar DNI
        $dni =$_SESSION['UsuariosID'];
        if ($dni) {
            $respuesta = obtenerPuntosPorDNI($dni);
        } else {
            $respuesta = "Por favor proporciona tu número de DNI para consultar tus puntos.";
        }
    } else {
        // Respuesta para otras preguntas frecuentes
        $sql = "SELECT respuesta FROM preguntas_frecuentes WHERE pregunta LIKE '%$pregunta%'";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // Devolver la primera respuesta encontrada
            $row = $result->fetch_assoc();
            $respuesta = $row['respuesta'];
        } else {
            $respuesta = "Lo siento, no tengo información sobre eso. ¿Puedo ayudarte en algo más?";
        }
    }

    return $respuesta;
}


// Función para obtener puntos por DNI desde la base de datos
function obtenerPuntosPorDNI($dni) {
    global $link;

    $sql = "SELECT Puntos FROM usuarios WHERE UsuariosID = '$dni'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        // Devolver puntos encontrados
        $row = $result->fetch_assoc();
        return "Tienes ".$row['Puntos']." puntos.";
    } else {
        return "No encontré puntos asociados a ese DNI.";
    }
}

// Obtener la pregunta del usuario
$input = strtolower($_GET['msg']);

// Procesar la pregunta y obtener la respuesta
$respuesta = obtenerRespuesta($input);

// Devolver la respuesta al usuario
echo $respuesta;

$link->close();
?>