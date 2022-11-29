<?php
    require "conexion.php";

    $correo = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if(tieneInformacion($correo,$contrasena) && existeUsuario($correo,$contrasena)) {
        #iniciamos sesion
        session_start();
        #guardamos el nombre en una variable de sesion
        $_SESSION["id_empresa"] = $correo;
        $_SESSION["nombre_empresa"] = obtenerNombreEmpresa($correo);
        
        echo "<script language='JavaScript'>
            location.assign('SesionIniciada.php');
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

    function obtenerNombreEmpresa($correo) {
        require "conexion.php";
        if($result = mysqli_query($connection,"SELECT nombre FROM empresas WHERE correo = '$correo'")) {
            $nombre = "a";
            while ($row = $result->fetch_array()) {
                $nombre = $row['nombre'];
            }
            $result->close();
            return $nombre;
        }
    }
?>