<?php
    require "conexion.php";
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
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="css/style-indexOfertaEmpleo.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style-RegistroDatos.css">
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="encabezado">
            <img class="text-uppercase text-primary mb-1 logo" src="<?php echo $logo?>" height="100px" alt="Image">
            <h1 class="display-3 text-uppercase text-center mb-4">Bienvenido <?php echo $nombreEmpresa;?></h1>
        </div>
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

		<div class="signupFrm">
            <div class="wrapper">
                <form action="validaRegistro.php" method="POST" class="form">
                    <h1 class="title" >
                        <p class="centrado">Registro de datos</p> 
                    </h1>

                    <div class="inputContainer">
                        <input type="text" name="nombre" class="input" placeholder="a">
                        <label for="" class="label">Area</label>
                    </div>

                    <div class="inputContainer">
                        <input type="text" name="municipio" class="input" placeholder="a">
                        <label for="" class="label">Nombre de la oferta</label>
                    </div>

                    <div class="inputContainer">
                        <input type="text" name="entidad" class="input" placeholder="a">
                        <label for="" class="label">Sueldo</label>
                    </div>
                    <input type="submit" class="submitBtn" value="Registrar datos">
                </form>
            </div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>