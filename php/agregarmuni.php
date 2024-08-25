<?php
    require_once "conexion.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recibe los datos del formulario.
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
      
    
        // Define la consulta SQL para insertar los datos en la tabla 'almacen'.
        $sql = "INSERT INTO municipalidades (IdMunicipalidades , Nombre, direccion) 
                VALUES (Null, '$nombre','$direccion')";
    
        // Ejecuta la consulta y verifica si se realizó correctamente.
        if (mysqli_query($link, $sql)) {
            header("location: ../admin/admin.php");

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
    
        // Cierra la conexión a la base de datos.
        mysqli_close($link);
    } else {
        echo "Método de solicitud no válido.";
    }
    ?>