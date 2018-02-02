<?php
    $Conexion = mysqli_connect("localhos","root","","MEMENTIRA");

    if (!$Conexion) {
    echo "<h1 style='color:red'>Error al intentar establecer la conexion con el servidor: </h1>" . mysqli_connect_error();
    }
?>