<?php
  require "conexion.php";
  $id_oferta = $_REQUEST['id_oferta'];

  $logo = "a";
    $correoEmpresa;
    $nombreEmpresa;

    session_start();
    if (isset($_SESSION["id_empresa"])) {

        $correoEmpresa = $_SESSION["id_empresa"];
        $nombreEmpresa = $_SESSION["nombre_empresa"];

        if($result = mysqli_query($connection,"SELECT logo_empresa FROM empresas WHERE correo = '$correoEmpresa'")) {
            while ($row = $result->fetch_array()) {
                $logo = $row['logo_empresa'];
            }
            $result->close();
        }
    }else{
        header('Location: IniciarSesion.html');//Aqui lo redireccionas al lugar que quieras.
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
        <title><?php echo $nombreEmpresa;?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="css/style-indexEmpresa.css" rel="stylesheet">
</head>
<body>
    <div class="encabezado">
        <img class="text-uppercase text-primary mb-1 logo" src="<?php echo $logo?>" height="100px" alt="Image">
        <h1 class="display-3 text-uppercase text-center mb-4">Bienvenido <?php echo $nombreEmpresa;?></h1>
    </div>
    <!-- Navbar End -->
    <!-- Inicio Menu -->
    <center>
        <nav>
            <div id="menu"> 
                <ul class="menup"> 
                    <li><a href="SesionIniciada.php">Inicio</a></li>
                    <li><a href="index-AgregarOfertaEmp.php">REGISTRAR OFERTA DE EMPLEO</a></li>
                    <li><a href="CerrarSecion.php">CERRAR SESION</a></li>
                </ul>
            </div>
        </nav>
    </center>
    <!-- Fin Menu -->

    <center>
        <table border = 1 cellspacing = 1 cellpadding = 1>
            <tr><td>Area</td><td>Nombre de la Oferta</td><td>Nombre postulante</td><td>Oficio</td><td>Telefono</td></tr>
            <?php 
                require "Conexion.php";
                /*invoca una instruccion de sql*/
                
                $result = mysqli_query($connection,"SELECT postulaciones.id_oferta,area,nombreOferta,nombre,oficio,telefono FROM postulaciones JOIN ofertas ON postulaciones.id_postulacion=ofertas.id_oferta JOIN aspirantes ON postulaciones.id_postulacion=aspirantes.CURP where postulaciones.id_oferta = '$id_oferta'");
                while($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["area"]; ?></td>
                        <td><?php echo $row["nombreOferta"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["oficio"]; ?></td>
                        <td><?php echo $row["telefono"]; ?></td>
                    </tr>
                    <?php    
                        }
                        mysqli_free_result($result);
                            mysqli_close($connection);
                    ?>
        </table>
    </center>
</body>
</html>