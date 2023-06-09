<?php

if (isset($_POST['registro'])) {
    require_once("./includes/conexion.php");
    if (!isset($_SESSION)) {
        session_start();
    }

    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST["nombre"], ENT_QUOTES, 'UTF-8'): false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? trim($_POST['email']) : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //Errores
    $errores = array();


    //Validación
    //nombre
    if (!empty($nombre) && is_string($nombre) && !preg_match("/[0-9]+/", $nombre)) {
        $nombre_valido = true;

    } else {
        $nombre_valido = false;
        $errores['nombre'] = "El nombre no es válido";
    }
    //Apellidos
    if (!empty($apellidos) && is_string($apellidos) && !preg_match("/[0-9]+/", $apellidos)) {
        $apellidos_valido = true;

    } else {
        $apellidos_valido = false;
        $errores['apellidos'] = "El apellido no es válido";
    }
    //Email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_valido = true;

    } else {
        $email_valido = false;
        $errores['email'] = "El email no es válido";
    }
    //CONTRASEÑA
    if (!empty($password)) {
        $password_valido = true;

    } else {
        $password_valido = false;
        $errores['password'] = "El password no es válido";
    }
    if (isset($_POST["terminos"])) {
        $terminos_valido = true;

    } else {
        $terminos_valido = false;
        $errores['terminos'] = "Debe aceptar los términos";
    }

    $guardar_usuario = false;

    if (empty($errores)) {
        $guardar_usuario = true;
        //echo "USUARIO VÁLIDO";
        //Hay que cifrar la contraseña para meterla a la base de datos, porque meterla tal cual es ilegal ?¿
        //password_hash permita cifrar contraseñas y cost  es el número de veces que cifra la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ["cost" => 4]);
        $fecha_actual = date("Y-m-d H:i:s"); #formato YYYY-MM-DD HH:mm:ss

        //Para verificarla: var_dump(password_verify($password, $password_segura)); 
        $preparada = $bd->prepare("insert into usuarios (nombre,apellidos,email,password,fecha) values (?,?,?,?,?)");
        if ($preparada->execute(array($nombre, $apellidos, $email, $password_segura, $fecha_actual))) {
            $_SESSION["completado"] = "El registro se ha completado con éxito";
        } else {
            $_SESSION["errores"]["general"] = "Fallo al guardar el usuario";

        }

    } else {
        $_SESSION["errores"] = $errores;


    }
    header("Location:index.php");
    // if(count($errores)==0){
    //     echo"USUARIO VÁLIDO";
    // }


}



?>