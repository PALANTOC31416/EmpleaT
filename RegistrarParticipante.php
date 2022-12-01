<?php
    require "conexion.php";

    $id_oferta = $_REQUEST['id_oferta'];
    $curp = $_POST['curp'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $oficio = $_POST['oficio'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    if(tieneInformacion($curp,$nombre,$apellidos,$oficio,$telefono,$correo)) {
        /* Registro aspirante */
        $instruccion_SQL = "INSERT INTO aspirantes(CURP,nombre, apellidos,oficio, telefono, correo)
            VALUES ('$curp','$nombre','$apellidos','$oficio','$telefono','$correo')";
                                                  
        $resultado = mysqli_query($connection,$instruccion_SQL);
        /* Registro a postulacion */
        $instruccion_SQL = "INSERT INTO postulaciones(id_postulacion,id_oferta,CURP)
            VALUES (NULL,'$id_oferta','$curp')";
                                                  
        $resultado = mysqli_query($connection,$instruccion_SQL);
        echo "<script language='JavaScript'>
            alert('Registro Exitoso');
            location.assign('index.php');
            </script>";
    }else {
    ?>
        <script language='JavaScript'> 
            location.assign('FormRegistrarParticipante.php?id_oferta=<?php echo $id_oferta; ?>');
        </script>
    <?php
    }

    function tieneInformacion($curp,$nombre,$apellidos,$oficio,$telefono,$correo) {
        return !(empty($curp) || empty($nombre) || empty($apellidos) || empty($oficio) || empty($telefono) || empty($correo));
    }
?>