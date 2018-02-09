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


//if ($Conexion) {
//    echo "Conectado";
//}
//else{
//    die("Error al intentar conectar con la base de datos: " . $Conexion->connect_errno. ": " . $Conexion->connect_error);
//}

