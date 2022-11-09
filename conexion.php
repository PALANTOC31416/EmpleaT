<?php
    //validamos datos del servidor
    $user = "root";
    $pass = "";
    $host = "localhost";

    //conetamos al base datos
    $connection = mysqli_connect($host, $user, $pass);
    $datab = "empleat";
    //indicamos selecionar ala base datos
    $db = mysqli_select_db($connection,$datab);
    $connection = mysqli_connect($host, $user, $pass, $datab);
    if(!$connection) {
        echo "No se ha podido conectar con el servidor" ;
    }
?>