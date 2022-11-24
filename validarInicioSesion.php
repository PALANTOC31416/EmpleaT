<?php
    require "conexion.php";

    $correo = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    existeUsuario($correo,$contrasena);
    if(tieneInformacion($correo,$contrasena) && existeUsuario($correo,$contrasena)) {
        echo "<script language='JavaScript'>
            location.assign('index-Empresa.html');
            </script>";
    }else {
        echo "<script language='JavaScript'>
            alert('El usuario no existe o rellene todos los campos');
            location.assign('IniciarSesion.html');
            </script>";
    }

    function tieneInformacion($correo,$contrasena) {
        return !(empty($correo) || empty($contrasena));
    }

    function existeUsuario($correo,$contrasena) {
        require "conexion.php";
        if($result = mysqli_query($connection,"SELECT * FROM empresas WHERE correo = '$correo' AND contrasena = '$contrasena'")) {
            $correok = "a";
            while ($row = $result->fetch_array()) {
                $correok = $row['correo'];
            }
            $result->close();
            return ($correok == $correo);
        }
    }
?>