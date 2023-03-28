<?php 

function mostrarError($errores, $campo){
    $alerta="";
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta="<div class='alert alert-danger alerta' role='alert'>".$errores[$campo]."</div>";

    }
    return $alerta;

}

function borrarErrores(){
    //session_unset() se utiliza para eliminar todas las variables de sesión registradas actualmente. No necesita parámetros
    if(isset($_SESSION["errores"])){
    unset($_SESSION["errores"]);
    }
    if(isset($_SESSION["completado"])){
    unset($_SESSION["completado"]);
    }
   

}
?>