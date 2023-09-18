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
                    <img src="public/imagenes/logo.png" width="35" height="35" class="d-inline-block align-top" alt="">
                    FCYT-PARQUEO
                </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" >
                <a class="nav-link" href="#">CONTACTANOS</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PROMOCIONES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">MENSUALES</a>
                    <a class="dropdown-item" href="#">SEMANALES</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">FICHAS</a>
                </div>
            </li>

            </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                </form>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        Ingresar
                </button>
        </div>
</nav>


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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inicio de Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Inicio Formulario -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <lavel for="">Usuario/Email</lavel>
                        <input type="email" id="usuario" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <lavel for="">Contraseña</lavel>
                        <input type="password" id="password" class="form-control">
                    </div>
                </div>
            </div>

        <!-- Inicio id respuesta, envia lo que tanga el modal, usuario y contraseña al script de abajo, al controller_login-->
        <div id="respuesta">
    
        </div>
        <!-- Fin id respuesta-->

        <!-- Fin Formulario-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btn_ingresar">Ingresar</button>
      </div>
    </div>
  </div>
</div>

<!-- Usando ayax en esta seccion, utilizando codigo jquery, esta enviando del modal al controller_login -->
<script>
    $('#btn_ingresar').click(function() {
        login();
    });
        // Esta funcion keypress es para que ingrese toncano la tecla enter(15)
    $('#password').keypress(function(e){
        if(e.which == 13){
            login();
        }
    });

    function login(){
        var usuario=$('#usuario').val();
        var password_user=$('#password').val();
        var form_login="";
        // alert(usuario+password_user); esta linea es olo para confirmar que el formulario funciona

        if(usuario == ""){
            alert("Debe introducir su usuario...");
            $('#usuario').focus();
        }else if(password_user == ""){
            alert("Debe introducir su contraseña...");
            $('#password').focus();
            //focus() es para que directamente se valla al sector vacio para  lenar contraseña o usuario
        }else{
        // Esta es la parte que esta llamando al controlador de ajax
              var url = 'login/controller_login.php'
              $.post(url, {usuario:usuario , password_user:password_user, form_login:form_login}, function(datos){
              $('#respuesta').html(datos);
        });
        // Esta es la parte que esta llamando al controlador de ajax
        }
    }

</script>