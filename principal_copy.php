<!-- Esto es el panel principal del Administrador -->
<?php

include('app/config.php');
include('layout/admin/datos_usuario_sesion.php');

?>
  <!DOCTYPE html>
  <html lang="es">
      <head>
        <?php  include('layout/admin/head.php');?>
      </head>
        <body class="hold-transition sidebar-mini">
 
          <div class="wrapper">
            <!-- MESta parte esta en menu.php-->
            <?php  include('layout/admin/menu.php');?>
              
              <!--  <div class="content-wrapper"> 
                <h2>Bienvenido al SISTEMA DE PARQUEO - FCYT</h2> -->

                <!-- INICIO TARJETA-->
            <div class="content-wrapper" >
              <br>
              <div class="container" >

                <h2>Bienvenido al SISTEMA DE PARQUEO -FCYT</h2>

                <button type="button" name="btnprueba">Prueba</button> 
                <div class="col" style=" z-indez: -3; position:absulute; left: 20%;right:50%;top:50%" >
                  <p>
                     <center>
                        <h2>1</h2>
                        <button class="btn btn-info" id="btn_ocupado<?php echo $id_map;?>" data-toggle="modal"
                        data-target="#exampleModal<?php echo $id_map;?>">
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="60px" alt="">
                        </button>
                     </center>
                  <p>
                </div>

                  <div class="contenedor" style="background-position:right; float:center;">
                    <img src="public/imagenes/parqueo2.png" style="width:1000px; height:460px;">
                  </div>
            

    
              </div>
            </div>
          </div>

            <!-- FIN TARJETA-->

                <!-- </div>  position: absolute; top: 54.5%; right: 37.5%;  text-align: center;-->
                <!-- /.content-wrapper -->
              <?php  include('layout/admin/footer.php');?>

             
              <?php  include('layout/admin/footer_link.php');?>
        </body>
   </html>      

