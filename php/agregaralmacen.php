<?php
    require_once "conexion.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recibe los datos del formulario.
        $nombre = $_POST['Nombre'];
        $municipalidad_id = $_POST['municipalidad'];
        $residuo_id = $_POST['residuo'];
        $cantidad = $_POST['cantidad'];
    
        // Define la consulta SQL para insertar los datos en la tabla 'almacen'.
        $sql = "INSERT INTO almacen (AlmacenID, Nombre, ResiduosID, Ubicacion	, Capacidad , capacidadMax, Recaudado) 
                VALUES (Null, '$nombre','$residuo_id', '$municipalidad_id', '0' , '$cantidad','0')";
    
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