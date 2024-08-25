<?php

    // Incluir archivo de conexion a la base de datos
    require_once "conexion.php";
    
    // Definir variable e inicializar con valores vacio
    $username = $email = $password = "";
    $username_err = $email_err = $password_err = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // VALIDANDO INPUT DE NOMBRE DE USUARIO
        if(empty(trim($_POST["DNI"]))){
            $username_err = "Por favor, ingrese un DNI";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT UsuariosID  FROM usuarios WHERE UsuariosID  = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                $param_username = trim($_POST["DNI"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "Este DNI de usuario ya está en uso";
                    }else{
                        $username = trim($_POST["DNI"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }

    
        
        
        // VALIDANDO INPUT DE EMAIL
        if(empty(trim($_POST["email"]))){
            $email_err = "Por favor, ingrese un correo";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT UsuariosID FROM usuarios WHERE Email = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                
                $param_email = trim($_POST["email"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $email_err = "Este correo ya está en uso";
                    }else{
                        $email = trim($_POST["email"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }
        
        
        // VALIDANDO CONTRASEÑA
        if(empty(trim($_POST["password"]))){
            $password_err = "Por favor, ingrese una contraseña";
        }elseif(strlen(trim($_POST["password"])) < 4){
            $password_err = "La contraseña debe de tener al menos 4 caracteres";
        } else{
            $password = trim($_POST["password"]);
        }
        
        
        // COMPROBANDO LOS ERRORES DE ENTRADA ANTES DE INSERTAR LOS DATOS EN LA BASE DE DATOS
        if(empty($username_err) && empty($email_err) && empty($password_err)){
            
            $sql = "INSERT INTO usuarios (UsuariosID , Nombre, Email, Contrasena,Rol,Puntos) VALUES (?,?,?,?,'Cliente',0)";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "ssss", $param_UsuariosID,$param_Nombre,$param_Email , $param_contrasena );
                
                // ESTABLECIENDO PARAMETRO
                $param_UsuariosID = $username;
                $param_Email = $email;
                $param_Nombre = $_POST["NOMBRE"];
                $param_contrasena = password_hash($password, PASSWORD_DEFAULT); // ENCRIPTANDO CONTRASEÑA
                
                
                if(mysqli_stmt_execute($stmt)){
                    header("location: ../index.php");
                }else{
                    echo "Algo Salio mal, intentalo despues";
                }
            }
        }
        
        mysqli_close($link);
        
    }
    
?>