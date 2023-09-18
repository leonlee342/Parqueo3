<?php include('app/config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Sistema Parqueo FCYT</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-image: url('<?php echo $URL;?>/public/imagenes/parqueo0.jpeg');
             background-repeat:no-repeat;
             z-indez: -3;
             background-size: 100vw 100vh" >

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <!-- Esto es el logo -->
                <a class="navbar-brand" href="#">
                    <img src="public/imagenes/logo.png" width="35" height="35" class="d-inline-block align-top" opacity="5">
                    FCYT-PARQUEO
                </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">USUARIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" >
                <a class="nav-link" href="#">CAMBIAR CONTRASEÑA</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SOLICITUDES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">SOLICITAR SITIO</a>
                    <a class="dropdown-item" href="#">AÑADIR VEHICULO</a>
                    <a class="dropdown-item" href="#">SOLICITAR SITIO COMPARTIDO</a>
                </div>
            </li>
            <li class="nav-item active" >
                <a class="nav-link" href="#">REALIZAR RECLAMO</a>
            </li>
            <li class="nav-item active" >
                <a class="nav-link" href="#">MENSAJES</a>
            </li>
            </ul>


        </div>
</nav>


<br>

<center><h2> PERFIL DEL USUARIO </h2></center>




<div class="container" style="opacity:0.85">
<!-- ************************************** -->

<!-- ********************************* -->

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Comento este script de slim porque da error al ejecutar con ajax -->
    <!-- <script src="public/js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="public/js/jquery-3.6.4.min.js"> </script>
    <script src="public/js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="public/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
</body>
</html>

