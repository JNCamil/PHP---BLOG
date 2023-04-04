<?php

function mostrarError($errores, $campo)
{
    $alerta = "";
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alert alert-danger alerta' role='alert'>" . $errores[$campo] . "</div>";

    }
    return $alerta;

}

function borrarErrores()
{
    //session_unset() se utiliza para eliminar todas las variables de sesión registradas actualmente. No necesita parámetros
    if (isset($_SESSION["errores"]["login"])) {
        unset($_SESSION["errores"]["login"]);
    }
    if (isset($_SESSION["errores"]["general"])) {
        unset($_SESSION["errores"]["general"]);
    }
    if (isset($_SESSION["errores"])) {
        unset($_SESSION["errores"]);
    }
    if (isset($_SESSION["completado"])) {
        unset($_SESSION["completado"]);
    }
    if (isset($_SESSION["errores_entrada"])) {
        unset($_SESSION["errores_entrada"]);
    }
    if (isset($_SESSION["errores_categoria"])) {
        unset($_SESSION["errores_categoria"]);
    }


}

function verCategorias($bd)
{
    $preparada = $bd->prepare("select * from categorias order by id asc");
    $preparada->execute();
    $num_registros = $preparada->rowCount();
    $resultado = array();
    if ($num_registros >= 1) {
        $resultado = $preparada->fetchAll();

    }
    return $resultado;
}

function verUltimasEntradas($bd)
{
    $preparada = $bd->prepare("select e.*, c.nombre as categoria from entradas e
                             inner join categorias c on e.categoria_id=c.id 
                             order by e.fecha desc limit 4");
    $preparada->execute();
    $num_registros = $preparada->rowCount();
    $resultado = array();
    if ($num_registros >= 1) {
        $resultado = $preparada->fetchAll();

    }
    return $resultado;

}
?>