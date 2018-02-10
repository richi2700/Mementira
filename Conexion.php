<?php

$host = "localhost";
$user = "root";
$basedatos = "mementira";

try{
    $Conexion = mysqli_connect($host, $user,"", $basedatos);
}
catch(Exception $e)
{
    echo "Linea de error:  ". $e->getMessage();
}

