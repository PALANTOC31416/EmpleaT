<?php
  require "conexion.php";
  $id_oferta = $_REQUEST['id_oferta'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-Registro.css">
    <script src="js/bootstrap.js"></script>

    <title>Registrarse</title>
</head>
<body>
  <div class="signupFrm">
    <div class="wrapper">
    <form action="RegistrarParticipante.php?id_oferta=<?php echo $id_oferta; ?>" method="POST" class="form" enctype="multipart/form-data">
      <h1 class="title" >
        <p class="centrado">Registro</p> 
      </h1>

      <div class="inputContainer">
        <input type="text" name="curp" class="input" placeholder="a">
        <label for="" class="label" style="color: #000;">CURP</label>
      </div>

      <div class="inputContainer">
        <input type="text" name="nombre" class="input" placeholder="a">
        <label for="" class="label" style="color: #000;">Nombre</label>
      </div>

      <div class="inputContainer">
        <input type="text" name="apellidos" class="input" placeholder="a">
        <label for="" class="label" style="color: #000;">Apellidos</label>
      </div>

      <div class="inputContainer">
        <input type="text" name="oficio" class="input" placeholder="a">
        <label for="" class="label" style="color: #000;">Oficio</label>
      </div>

      <div class="inputContainer">
        <input type="text" name="telefono" class="input" placeholder="a">
        <label for="" class="label" style="color: #000;">Telefono</label>
      </div>
      
      <div class="inputContainer">
        <input type="text" name="correo" class="input" placeholder="a">
        <label for="" class="label" style="color: #000;">Correo</label>
      </div>

      <input type="submit" class="submitBtn" value="Enviar Informacion">
    </form>
    </div>
  </div>
</body>
</html>