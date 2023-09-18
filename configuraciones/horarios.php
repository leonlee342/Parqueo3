<?php 
include('../app/config.php');
include('../layout/admin/datos_usuario_sesion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('../layout/admin/head.php'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- nabvar inicio -->
    <?php include('../layout/admin/menu.php'); ?>
  <!-- nabvar final -->

  <!-- Main Sidebar Container -->
  <!-- FINALMain Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <br>
            <h2>Horarios del Parqueó</h2>
            <br>
            <a href="create_horarios.php" class="btn btn-primary">Modificar Horario</a><br><br>
            <table class="table table-bordered table-sm table-striped" style="border: 2px solid black" >
              <tr style="background-color: orange">
              <th ><center>HORAS</center></th>
              <th>LUNES</th>
              <th>MARTES</th>
              <th>MIERCOLES</th>
              <th>JUEVES</th>
              <th>VIERNES</th>
              <th>SABADO</th>              
              </tr>
              <?php                
                $query_horarios = $pdo->prepare("SELECT * FROM tb_horarios WHERE estado = '1'");
                $query_horarios->execute();
                $horarios = $query_horarios->fetchAll(PDO::FETCH_ASSOC);
                  foreach($horarios as $horario){
                      $lunes1 = $horario['lunes1'];
                      $martes1 = $horario['martes1'];
                      $miercoles1 = $horario['miercoles1'];
                      $jueves1 = $horario['jueves1'];
                      $viernes1 = $horario['viernes1'];
                      $sabado1 = $horario['sabado1'];
                      $lunes2 = $horario['lunes2'];
                      $martes2 = $horario['martes2'];
                      $miercoles2 = $horario['miercoles2'];
                      $jueves2 = $horario['jueves2'];
                      $viernes2 = $horario['viernes2'];
                      $sabado2 = $horario['sabado2'];
                      $lunes3 = $horario['lunes3'];
                      $martes3 = $horario['martes3'];
                      $miercoles3 = $horario['miercoles3'];
                      $jueves3 = $horario['jueves3'];
                      $viernes3 = $horario['viernes3'];
                      $sabado3 = $horario['sabado3'];   
                      $fecha1 = $horario['fecha1'];                                                              
                      $fecha2 = $horario['fecha2'];  
              ?>
                    <tr style="background-color: lightblue">
                      <td style="background-color: yellow"><center><b>6:00 - 12:00</b></center></td>                      
                      <td><?php echo $lunes1;?></td>
                      <td><?php echo $martes1;?></td>
                      <td><?php echo $miercoles1;?></td>
                      <td><?php echo $jueves1;?></td>
                      <td><?php echo $viernes1;?></td>                      
                      <td><?php echo $sabado1;?></td>                      
                    </tr>
                    <tr style="background-color: lightblue">
                      <td style="background-color: yellow"><center><b>12:00 - 18:00</b></center></td>
                      <td><?php echo $lunes2;?></td>
                      <td><?php echo $martes2;?></td>
                      <td><?php echo $miercoles2;?></td>
                      <td><?php echo $jueves2;?></td>
                      <td><?php echo $viernes2;?></td>                      
                      <td><?php echo $sabado2;?></td> 
                    </tr>
                    <tr style="background-color: lightblue">
                      <td style="background-color: yellow"><center><b>18:00 - 22:00</b></center></td>
                      <td><?php echo $lunes3;?></td>
                      <td><?php echo $martes3;?></td>
                      <td><?php echo $miercoles3;?></td>
                      <td><?php echo $jueves3;?></td>
                      <td><?php echo $viernes3;?></td>                      
                      <td><?php echo $sabado3;?></td> 
                    </tr>
              <?php                   
              }
              ?>

            </table>
<!-- 
              <h3>Fecha semana</h3>
              <br>
              <input type="date" class="" id="fecha1"> al <input type="date" class="" id="fecha2"><br><br>      
              <button class="btn btn-primary" id="btn_registrar_semana">Cambiar dias</button> -->

        </div>
                    <div id="respuesta">

                    </div>

     <b>NOTA:    </b>Horario del Parqueo  de la semana actual. 
     <!-- fecha <label for="" class="" ><?php echo $fecha1;?></label> al <label for="" class="" ><?php echo $fecha2;?></label>. -->
     



    </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <?php include('../layout/admin/footer.php'); ?>
  <!-- FINAL Main Footer -->
</div>
<!-- ./wrapper -->

<?php include('../layout/admin/footer_link.php'); ?>
</body>
</html>

<script>
  $('#btn_registrar_semana').click(function(){

    var fecha1 = $('#fecha1').val();  
    var fecha2 = $('#fecha2').val();  

    var url = 'controller_cambiar_fecha.php';
        $.get(url, {fecha1:fecha1, fecha2:fecha2}, function(datos){
        $('#respuesta').html(datos);
        }); 
  });
</script>