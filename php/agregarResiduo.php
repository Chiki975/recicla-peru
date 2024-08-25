<?php
    require_once "conexion.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recibe los datos del formulario.
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        $puntos = $_POST['puntos'];
        $precio = $_POST['precio'];
        $unidad = $_POST['unidad'];
      
    
        // Define la consulta SQL para insertar los datos en la tabla 'almacen'.
        $sql = "INSERT INTO residuos (ResiduosID  , Nombre, Descripción,Categoría,PuntosPorReciclaje,Precio,Unidad) 
                VALUES (Null, '$nombre','$descripcion','$categoria','$puntos','$precio','$unidad')";
    
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