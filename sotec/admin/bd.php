<?php
$servidor="localhost";
$baseDatos="sotec";
$usuario="root";
$contraseña="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario ,$contraseña);
}catch(Exeption $error){
    echo $error->getMessage();
}
?>