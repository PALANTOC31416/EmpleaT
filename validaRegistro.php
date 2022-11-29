<?php
    require "conexion.php";
    
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $giro = $_POST["giro"];
    $contrasena = $_POST["contrasena"];

    $img = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamano = $_FILES['archivo']['size'];
    $temp = $_FILES['archivo']['tmp_name'];
    
    if(tieneInformacion($nombre,$direccion,$telefono,$correo,$giro,$contrasena,$img) && !existeCorreo($correo) && !empty($img)) {
        if(subirImg($img, $tipo, $tamano, $temp)){
            $instruccion_SQL = "INSERT INTO empresas(nombre, direccion, telefono, correo,contrasena, giro,logo_empresa)
            VALUES ('$nombre','$direccion',$telefono,'$correo','$contrasena','$giro','img-Empresas/$img')";
                                                  
            $resultado = mysqli_query($connection,$instruccion_SQL);
            echo "<script language='JavaScript'>
            alert('Registro Exitoso');
            location.assign('IniciarSesion.html');
            </script>";
        }else {
            echo "<script language='JavaScript'> location.assign('Registro.html')</script>";
        }
    }else {
        echo "<script language='JavaScript'> location.assign('Registro.html')</script>";
    }

    function tieneInformacion($nombre,$direccion,$telefono,$correo,$giro,$contrasena,$img) {
        return !(empty($nombre) || empty($direccion) || empty($telefono) || empty($correo) || empty($giro) || empty($contrasena) || empty($img));
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

    function subirImg($img, $tipo, $tamano, $temp) {
        //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")))) {
            echo "<script language='JavaScript'>
                    alert('Error. La extensión o el tamaño de los archivos no es correcta.<br/>
                    - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.');
                    </script>";
            return false;
        }
        else {
            //Si la imagen es correcta en tamaño y tipo
            //Se intenta subir al servidor
            if (move_uploaded_file($temp, 'img-Empresas/'.$img)) {
                //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                chmod('img-Empresas/'.$img, 0777);
                return true;
            }
            else {
                //Si no se ha podido subir la imagen, mostramos un mensaje de error
                echo "<script language='JavaScript'>
                    alert('Ocurrió algún error al subir el fichero. No pudo guardarse.');
                    </script>";
                return false;
            }
        }
    }
?>