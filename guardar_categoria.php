


<?php 
if(isset($_POST)){
    require_once "./includes/conexion.php";
    // Escapa los caracteres especiales
    // $valor = htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
    /*
    Es importante tener en cuenta que al utilizar htmlspecialchars, el valor ingresado en el input será modificado para escapar los caracteres especiales. Por lo tanto, si necesitas utilizar el valor original en otro contexto, como en un archivo de texto o en un correo electrónico, deberás guardar el valor original en una variable separada antes de escaparlo con htmlspecialchars.
    POR LO QUE SERÍA RECOMENDABLE GUARDAR LA VARIABLE ORIGINAL en la primera línea:
    $nombre_original=isset($_POST["nombre"]) ? $_POST["nombre"] : false;
    */

    $nombre=isset($_POST["nombre"])? htmlspecialchars($_POST["nombre"], ENT_QUOTES, 'UTF-8'):false;

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

    if(count($errores)==0){

        $preparada=$bd->prepare("insert into categorias values (?, ?)");
        $preparada->execute(array("null",$nombre));

        
    }

    header("Location: index.php");
}
?>