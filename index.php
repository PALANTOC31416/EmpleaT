<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>EmpleaTec</title>
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
        <link href="css/style-index.css" rel="stylesheet">
    </head>
    <body>
        <div class="encabezado">
            <img class="text-uppercase text-primary mb-1 logo" src="Imagenes/TECNM.PNG" height="100px" alt="Image">
            <h1 class="display-3 text-uppercase text-center mb-4">Bienvenido a <span class="text-primary">Emplea-Tec</span></h1>
        </div>
        <!-- Inicio Menu -->
        <center>
            <nav>
                <div id="menu"> 
                    <ul class="menup"> 
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="IniciarSesion.html">Iniciar Sesion como Empresa</a></li>
                        <li><a href="Registro.html">Registrar Empresa</a></li>
                    </ul>
                </div>
            </nav>
	    </center>
        <!-- Fin Menu -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0" style="margin-bottom: 90px;">
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="Imagenes/Albanil.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 600px;">
                                <h4 class="text-white text-uppercase mb-md-3">Vacante disponible</h4>
                                <h1 class="display-1 text-white mb-md-4">Obrero</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="Imagenes/Carpinteria.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 600px;">
                                <h4 class="text-white text-uppercase mb-md-3">Vacante disponible</h4>
                                <h1 class="display-1 text-white mb-md-4">Carpinteria</h1>
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="Imagenes/Soldador.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 600px;">
                                <h4 class="text-white text-uppercase mb-md-3">Vacante disponible</h4>
                                <h1 class="display-1 text-white mb-md-4">Soldadadura</h1>
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="Imagenes/Carpinteria.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 600px;">
                                <h4 class="text-white text-uppercase mb-md-3">Vacante disponible</h4>
                                <h1 class="display-1 text-white mb-md-4">Carpinteria</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- Carousel End -->
        <!-- Rent A Car Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <h1 class="display-4 text-uppercase text-center mb-5">Vacantes de Empleo</h1>
                <div class="row">
                    <?php 
                        require "Conexion.php";
                        /*invoca una instruccion de sql*/
                        $result = mysqli_query($connection,'SELECT area,nombreOferta,fechaDePublicacion,sueldo,correo FROM ofertas');
                        while($row = mysqli_fetch_array($result)) {
                            printf('<div class="col-lg-4 col-md-6 mb-2">
                            <div class="rent-item mb-4">
                                <img class="img-fluid mb-4" src="Imagenes/icons8-carpintero-89.png" alt="">
                                <h4 class="text-uppercase mb-4">Carpinteria</h4>
                                <p>%s</p>
                                <h4>%s</h4>
                                <p>%s</p>
                                <p>%s</p>
                                <a class="btn btn-primary px-3" href="">Participar</a>
                            </div>
                        </div>', $row["area"], $row["nombreOferta"], $row["fechaDePublicacion"],$row["sueldo"],$row["correo"]);
                        }
                        mysqli_free_result($result);
                        mysqli_close($connection);
                    ?>
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="rent-item mb-4">
                            <img class="img-fluid mb-4" src="Imagenes/cerrajero.png" alt="">
                            <h4 class="text-uppercase mb-4">Cerrajero</h4>
                            <p>area</p>
                            <h4>sueldo</h4>
                            <p>correo</p>
                            <p>fecha de publicacion</p>
                            <a class="btn btn-primary px-3" href="">Participar</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="rent-item mb-4">
                            <img class="img-fluid mb-4" src="Imagenes/mecanico.png" alt="">
                            <h4 class="text-uppercase mb-4">Mecánico</h4>
                            <p>area</p>
                            <h4>sueldo</h4>
                            <p>correo</p>
                            <p>fecha de publicacion</p>
                            <a class="btn btn-primary px-3" href="">Participar</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="rent-item mb-4">
                            <img class="img-fluid mb-4" src="Imagenes/icons8-welder-89.png" alt="">
                            <h4 class="text-uppercase mb-4">Soldador</h4>
                            <p>area</p>
                            <h4>sueldo</h4>
                            <p>correo</p>
                            <p>fecha de publicacion</p>
                            <a class="btn btn-primary px-3" href="">Participar</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="rent-item mb-4">
                            <img class="img-fluid mb-4" src="Imagenes/icons8-hairdresser-89.png" alt="">
                            <h4 class="text-uppercase mb-4">Estilista</h4>
                            <p>area</p>
                            <h4>sueldo</h4>
                            <p>correo</p>
                            <p>fecha de publicacion</p>
                            <a class="btn btn-primary px-3" href="">Participar</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="rent-item mb-4">
                            <img class="img-fluid mb-4" src="Imagenes/icons8-architect-89.png" alt="">
                            <h4 class="text-uppercase mb-4">Obrero</h4>
                            <p>area</p>
                            <h4>sueldo</h4>
                            <p>correo</p>
                            <p>fecha de publicacion</p>
                            <a class="btn btn-primary px-3" href="">Participar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Rent A Car End -->

        <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
            <p class="mb-2 text-center text-body">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
            <p class="m-0 text-center text-body">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
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