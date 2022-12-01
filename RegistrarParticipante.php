<?php
    require "conexion.php";
    $id_oferta = $_REQUEST['id_oferta'];
    
    session_start();
    if (isset($_SESSION["id_empresa"])) {
        
        echo "<script language='JavaScript'>
            alert('Se ha eliminado correctamente');
            location.assign('index.php');
            </script>";
    }else{
        header('Location: index.php');//Aqui lo redireccionas al lugar que quieras.
        die();
    }
?>