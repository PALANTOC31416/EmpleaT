<?php
    require "conexion.php";

    $correo = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    
    if(tieneInformacion() || existeUsuario($correo,$contrasena)) {
        echo "<script language='JavaScript'>
            location.assign('SesionIniciada.php');
            </script>";
    }else {
        echo "<script language='JavaScript'>
            alert('El usuario no existe o rellene todos los campos');
            location.assign('IniciarSesion.html');
            </script>";
    }

    function tieneInformacion() {
        if(empty($correo) || empty($contrasena)) {
            return false;
        }else {
            return true;
        }
    }

    function existeUsuario($correo,$contrasena) {
        require "conexion.php";
        if($result = mysqli_query($connection,"SELECT * FROM empresa WHERE correo = '$correo' AND contrasena = $contrasena")) {
            $correok = "a";
            while ($row = $result->fetch_array()) {
                $correok = $row['correo'];
            }
            $result->close();
            if($correok == $correo) {
                return true;
            }else {
                return false;
            }
        }
    }
?>