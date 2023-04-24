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
    //ESTA OPCIÓN SI PRETENDO QUE LA VARIABLE SESSION["errores"]["login"] PERMANEZCA EN MI CÓDIGO
    // if (isset($_SESSION["errores"]["login"])) {
    //    $_SESSION["errores"]["login"]=null;
    // }
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

function verCategoria($bd, $id)
{
    $preparada = $bd->prepare("select * from categorias where id=?");
    $preparada->execute(array($id));
    $num_registros = $preparada->rowCount();
    $resultado=array();
    if ($num_registros >= 1) {
        $resultado = $preparada->fetch(PDO::FETCH_ASSOC);

    }
    return $resultado;
}

function verEntradas($bd, $limit=null, $categoria=null)
{
    $sql="select e.*, c.nombre as categoria from entradas e
    inner join categorias c on e.categoria_id=c.id ";


    if(!empty($categoria)){
        $sql.="where e.categoria_id=$categoria ";
    }

    $sql.="order by e.fecha desc ";

    if($limit){
        $sql.="limit 4";
    }
   
  
    
    $preparada = $bd->prepare($sql);
    $preparada->execute();
    $num_registros = $preparada->rowCount();
    $resultado = array();
    if ($num_registros >= 1) {
        $resultado = $preparada->fetchAll();

    }
    return $resultado;

}
function verEntrada_individual($bd, $id)
{
    $preparada = $bd->prepare("select e.*, c.nombre as categoria from entradas e inner join categorias c on e.categoria_id=c.id where e.id=?");
    $preparada->execute(array($id));
    $num_registros = $preparada->rowCount();
    $resultado=array();
    if ($num_registros >= 1) {
        $resultado = $preparada->fetch(PDO::FETCH_ASSOC);

    }
    return $resultado;
}

?>