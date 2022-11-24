<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>EmpleaT</title>
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
        <!-- Navbar Start -->
        <div class="container-fluid position-relative nav-bar p-0">
            <div class="position-relative px-lg-5" style="z-index: 9;">
                <nav class="navbar navbar-expand-lg bg-blues navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                    <a href="" class="navbar-brand">
                        <img class="text-uppercase text-primary mb-1" src="Imagenes/EmpleaTLogo.png" height="100px" alt="Image">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <h1 class="display-3 text-uppercase text-center mb-4">Bienvenido a <span class="text-primary">EmpleaT</span></h1>
    
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
                                <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Clic aqui</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="Imagenes/Carpinteria.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 600px;">
                                <h4 class="text-white text-uppercase mb-md-3">Vacante disponible</h4>
                                <h1 class="display-1 text-white mb-md-4">Carpinteria</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Clic aqui</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="Imagenes/Soldador.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 600px;">
                                <h4 class="text-white text-uppercase mb-md-3">Vacante disponible</h4>
                                <h1 class="display-1 text-white mb-md-4">Soldadadura</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Clic aqui</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="Imagenes/Carpinteria.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 600px;">
                                <h4 class="text-white text-uppercase mb-md-3">Vacante disponible</h4>
                                <h1 class="display-1 text-white mb-md-4">Carpinteria</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Clic aqui</a>
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

        <!-- Banner Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row mx-0">
                    <div class="col-lg-6 px-0">
                        <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                            <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="img/banner-left.png" alt="">
                            <div class="text-right">
                                <h3 class="text-uppercase text-light mb-3">¿Deseas publicar algun empleo?</h3>
                                <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                                <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-0">
                        <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                            <div class="text-left">
                                <h3 class="text-uppercase text-light mb-3">¿Buscas empleados?</h3>
                                <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                                <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                            </div>
                            <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <h1 class="display-4 text-uppercase text-center mb-5">Contactar</h1>
                <div class="row">
                    <div class="col-lg-7 mb-2">
                        <div class="contact-form bg-light mb-4" style="padding: 30px;">
                            <form>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <input type="text" class="form-control p-4" placeholder=" Nombre" required="required">
                                    </div>
                                    <div class="col-6 form-group">
                                        <input type="email" class="form-control p-4" placeholder="Email" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Puesto de trabajo" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control py-3 px-4" rows="5" placeholder="Mensaje" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary py-3 px-5" type="submit">Enviar mensaje</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-2">
                        <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                            <div class="d-flex mb-3">
                                <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                                <div class="mt-n1">
                                    <h5 class="text-light">Oficina Central</h5>
                                    <p>Tehuacan,Puebla</p>
                                </div>
                            </div>
                            <!--
                            <div class="d-flex mb-3">
                                <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                                <div class="mt-n1">
                                    <h5 class="text-light">Branch Office</h5>
                                    <p>123 Street, New York, USA</p>
                                </div>
                            </div>
                            -->
                            <div class="d-flex mb-3">
                                <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                                <div class="mt-n1">
                                    <h5 class="text-light">Customer Service</h5>
                                    <p>EmpleaTehuacan@gmail.com</p>
                                </div>
                            </div>
                            <!--
                            <div class="d-flex">
                                <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                                <div class="mt-n1">
                                    <h5 class="text-light">Return & Refund</h5>
                                    <p class="m-0">refund@example.com</p>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
            <p class="mb-2 text-center text-body">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
            <p class="m-0 text-center text-body">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

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