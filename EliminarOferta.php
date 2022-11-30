<?php
    require "conexion.php";
    $id_oferta = $_REQUEST['id_oferta'];
    
    session_start();
    if (isset($_SESSION["id_empresa"])) {
        $instruccion_SQL = "DELETE FROM ofertas WHERE id_oferta = '$id_oferta'";
        $resultado = mysqli_query($connection,$instruccion_SQL);
        echo "<script language='JavaScript'>
            alert('Se ha eliminado correctamente');
            location.assign('SesionIniciada.php');
            </script>";
    }else{
        header('Location: SesionIniciada.php');//Aqui lo redireccionas al lugar que quieras.
        die();
    }
?>