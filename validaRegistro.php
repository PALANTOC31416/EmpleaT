<?php
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $giro = $_POST["giro"];
    $contrasena = $_POST["contrasena"];
    $contrasena2 = $_POST["contrasenaDos"];

    echo tieneInformacion();

    function tieneInformacion() {
        if(empty($nombre) || empty($direccion) || empty($telefono) || empty($correo) || empty($giro) || empty($contrasena) || empty($contrasena2)) {
            return false;
        }else {
            return true;
        }
    }

    function validarCorreo() {
        
    }
?>