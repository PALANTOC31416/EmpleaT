<?php
    require "conexion.php";
    session_start();
    if (isset($_SESSION["id_empresa"])) {
        $correoEmpresa = $_SESSION["id_empresa"];
        $nombreEmpresa = $_SESSION["nombre_empresa"];

        $area = $_POST["area"];
        $nombreOferta = $_POST["nombreOferta"];
        $sueldo = $_POST["sueldo"];
        if(tieneInformacion($area,$nombreOferta,$sueldo)) {
            $fechaPublicacion = date('y-m-d');
            $instruccion_SQL = "INSERT INTO ofertas(id_oferta,area,nombreOferta,fechaDePublicacion,sueldo,correo)
            VALUES (NULL,'$area','$nombreOferta','$fechaPublicacion',$sueldo,'$correoEmpresa')";
                                                  
            $resultado = mysqli_query($connection,$instruccion_SQL);
            echo "<script language='JavaScript'>
            alert('Registro Exitoso');
            location.assign('index-AgregarOfertaEmp.php');
            </script>";
        }else {
            echo "<script language='JavaScript'> location.assign('index-AgregarOfertaEmp.php')</script>";
        }
    }else{
        header('Location: index-AgregarOfertaEmp.php');//Aqui lo redireccionas al lugar que quieras.
        die();
    }

    function tieneInformacion($area,$nombreOferta,$sueldo) {
        return !(empty($area) || empty($nombreOferta) || empty($sueldo));
    }
?>