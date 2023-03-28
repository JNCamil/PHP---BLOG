<?php

$usuario = "blogger";
$password = "*0CqC!FDLjwfPHFh";
#Setear los resultados de la base de datos en utf8 (tildes, ñ, ..)
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);

$bd = new PDO('mysql:dbname=blog;host=localhost', $usuario, $password, $options);
#Excepciones para cuando ocurra un error
$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
session_start();


// function conexion()
// {


//     $usuario = "blogger";
//     $password = "*0CqC!FDLjwfPHFh";
//     #Setear los resultados de la base de datos en utf8 (tildes, ñ, ..)
//     $options =array(
//         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
//     );

//     try {

//         $bd = new PDO('mysql:dbname=blog;host=localhost', $usuario, $password, $options);
//         #Excepciones para cuando ocurra un error
//         $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         return $bd;
//     } catch (PDOException $e) {
//         #Si ocurre un error, se lanza una excepción
//         throw new Exception("Error al conectar a la base de datos: " . $e->getMessage());
//     }
// }
?>