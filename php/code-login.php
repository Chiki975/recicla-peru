<?php

//INICIALIZAR LA SESION
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: inicio.php");
    exit;
}

require_once "conexion.php";

$correo = $password = "";
$correo_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (empty(trim($_POST["correo"]))) {
        $email_err = "location: Por favor, ingrese el correo electronico";
    } else {
        $correo = trim($_POST["correo"]);
    }

    if (empty(trim($_POST["contrasena"]))) {
        $password_err = "Por favor, ingrese una contraseña";
    } else {
        $password = trim($_POST["contrasena"]);
    }




    //VALIDAR CREDENCIALES
    if (empty($correo_err) && empty($password_err)) {

        $sql = "SELECT UsuariosID , Nombre ,Email, Contrasena, Rol , Puntos FROM usuarios WHERE Email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {

            mysqli_stmt_bind_param($stmt, "s", $param_correo);

            $param_correo = $correo;

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
            }

            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $UsuariosID, $Nombre, $Email, $hashed_password, $Rol, $Puntos);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        session_start();

                        // ALMACENAR DATOS EN VARABLES DE SESION
                        $_SESSION["loggedin"] = true;
                        $_SESSION["UsuariosID"] = $UsuariosID;
                        $_SESSION["Nombre"] = $Nombre;
                        $_SESSION["Email"] = $Email;
                        $_SESSION["Rol"] = $Rol;
                        $_SESSION["Puntos"] = $Puntos;
                        header("location: inicio.php");
                    } else {
                        $password_err = "location: La contraseña que has introducido no es valida";
                    }

                }
            } else {
                $email_err = "No se ha encontrado ninguna cuenta con ese correo electronico.";
            }

        } else {
            echo "location: UPS! algo salio mal, intentalo mas tarde";
        }
    }

    mysqli_close($link);

}

?>