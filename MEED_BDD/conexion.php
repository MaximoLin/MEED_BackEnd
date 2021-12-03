<?php

$host = "localhost";
$user = "root";
$clave = "";
$BDD = "meed";

$conexion = new mysqli($host,$user,$clave,$BDD);
/*
if($conexion->connect_error)
{
   die("conexion fallida: " . $conexion->connect_error); 
    echo "conexion fallida " . mysql_error();
}
else
{
    echo "Conectado";
}
*/
?>