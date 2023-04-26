<?php
    $host = 'localhost'; //kreisel.com
    $user = 'kreis1_kreisel';
    $pass = 'jespinoza';
    $based = 'kreis1_2012';

    $conexion = mysql_connect($host, $user, $pass) or die ("Fallo en el establecimiento de la conexión");
    $db = mysql_select_db($based, $conexion) or die ("Error en la selección de la base de datos");

    echo mysql_error($conexion);
?>
