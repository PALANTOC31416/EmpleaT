<?php
    require "conexion.php";
    
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $giro = $_POST["giro"];
    $contrasena = $_POST["contrasena"];
    $contrasena2 = $_POST["contrasenaDos"];
  
    if(tieneInformacion($nombre,$direccion,$telefono,$correo,$giro,$contrasena,$contrasena2) && !existeCorreo($correo)) {
        $instruccion_SQL = "INSERT INTO empresas(nombre, direccion, telefono, correo,contrasena, giro)
        VALUES ('$nombre','$direccion',$telefono,'$correo','$contrasena','$giro')";
                                                  
        $resultado = mysqli_query($connection,$instruccion_SQL);
        echo "<script language='JavaScript'>
            alert('Registro Exitoso');
            location.assign('IniciarSesion.html');
            </script>";
    }else {
        echo "<script language='JavaScript'> location.assign('Registro.html')</script>";
    }

    function tieneInformacion($nombre,$direccion,$telefono,$correo,$giro,$contrasena,$contrasena2) {
        return !(empty($nombre) || empty($direccion) || empty($telefono) || empty($correo) || empty($giro) || empty($contrasena) || empty($contrasena2));
    }

    function existeCorreo($correo) {
        require "conexion.php";
        if($result = mysqli_query($connection,"SELECT * FROM empresas WHERE correo = '$correo'")) {
            $correok = "a";
            while ($row = $result->fetch_array()) {
                $correok = $row['correo'];
            }
            echo $correo;
            $result->close();
            if($correok == $correo) {
                echo "<script language='JavaScript'>
                    alert('El correo ya esta en uso');
                    </script>";
                return true;
            }else {
                return false;
            }
        }
    }
?>