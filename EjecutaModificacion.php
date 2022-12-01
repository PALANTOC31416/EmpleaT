<?php
    require "conexion.php";
    $id_oferta = $_REQUEST['id_oferta'];
    
    session_start();
    if (isset($_SESSION["id_empresa"])) {
        $area = $_POST["area"];
        $nombreOferta = $_POST["nombreOferta"];
        $sueldo = $_POST["sueldo"];
        
        if(tieneInformacion($area,$nombreOferta,$sueldo)) {
            $fechaPublicacion = date('y-m-d');
            $instruccion_SQL = "UPDATE ofertas SET area='$area',nombreOferta='$nombreOferta',fechaDePublicacion='$fechaPublicacion',sueldo=$sueldo WHERE id_oferta=$id_oferta";
                                                  
            $resultado = mysqli_query($connection,$instruccion_SQL);
            echo "<script language='JavaScript'>
            alert('Se modifico Correctamente');
            location.assign('SesionIniciada.php');
            </script>";
        }else {
            ?>
            <script language='JavaScript'>
            alert('Rellene bien los datos'); 
            location.assign("ModificarOferta.php?id_oferta=<?php echo $id_oferta; ?>");
            </script>
        <?php
        }
    }else {
        header('Location: SesionIniciada.php');//Aqui lo redireccionas al lugar que quieras.
        die();
    }

    function tieneInformacion($area,$nombreOferta,$sueldo) {
        return !(empty($area) || empty($nombreOferta) || empty($sueldo));
    }
?>