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

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <br>
            <h2>Creación de tabla de horarios</h2>
            <br>

            <div class="row">
                <div class="col-md-12">
                     <!-- INICIO TARJETA -->
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registre los datos con mucho cuidado</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">

                            <table class="table table-bordered table-sm table-striped">
                                <tr class="">
                                    <th>HORAS</th>
                                    <th>LUNES</th>
                                    <th>MARTES</th>
                                    <th>MIERCOLES</th>
                                    <th>JUEVES</th>
                                    <th>VIERNES</th>
                                    <th>SABADO</th>
                                </tr>
                                <tr>
                                    <th>6:00 - 12:00</th>
                                    <th>
                                        <select name="lunes1" id="lunes1" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="martes1" id="martes1" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="miercoles1" id="miercoles1" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="jueves1" id="jueves1" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="viernes1" id="viernes1" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="sabado1" id="sabado1" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th>12:00 - 18:00</th>
                                    <th>
                                        <select name="lunes2" id="lunes2" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="martes2" id="martes2" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="miercoles2" id="miercoles2" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="jueves2" id="jueves2" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="viernes2" id="viernes2" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="sabado2" id="sabado2" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th>18:00 - 22:00</th>
                                    <th>
                                        <select name="lunes3" id="lunes3" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="martes3" id="martes3" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="miercoles3" id="miercoles3" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="jueves3" id="jueves3" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="viernes3" id="viernes3" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select name="sabado3" id="sabado3" class="form-control">
                                            <option value="Abierto" class="">Abierto</option>
                                            <option value="Cerrado" class="">Cerrado</option>
                                        </select>
                                    </th>
                                </tr>
                                
                       

                            </table>

                        </div>

                        <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <a href="../configuraciones/horarios.php" class="btn btn-default btn-block">Cancelar</a>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary btn-block" id="btn_registrar_horario">
                                        Registrar
                                    </button>
                                </div>
                            </div>

                                <div id="respuesta">

                                </div>

                    </div>
                        <!-- FIN TARJETA -->
                            
                </div>
            </div>

        </div>
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
  $('#btn_registrar_horario').click(function(){
    
    var lunes1 = $('#lunes1').val();
    var martes1 = $('#martes1').val();
    var miercoles1 = $('#miercoles1').val();
    var jueves1 = $('#jueves1').val();
    var viernes1 = $('#viernes1').val();
    var sabado1 = $('#sabado1').val();
    var lunes2 = $('#lunes2').val();
    var martes2 = $('#martes2').val();
    var miercoles2 = $('#miercoles2').val();
    var jueves2 = $('#jueves2').val();
    var viernes2 = $('#viernes2').val();
    var sabado2 = $('#sabado2').val();
    var lunes3 = $('#lunes3').val();
    var martes3 = $('#martes3').val();
    var miercoles3 = $('#miercoles3').val();
    var jueves3 = $('#jueves3').val();
    var viernes3 = $('#viernes3').val();
    var sabado3 = $('#sabado3').val();
   
            //alert('esta listicimo');
            var url = 'controller_create_hoarios.php';
            $.get(url,{lunes1:lunes1, martes1:martes1, miercoles1:miercoles1, jueves1:jueves1, viernes1:viernes1, sabado1:sabado1, lunes2:lunes2, martes2:martes2, miercoles2:miercoles2, jueves2:jueves2, viernes2:viernes2, sabado2:sabado2, lunes3:lunes3, martes3:martes3, miercoles3:miercoles3, jueves3:jueves3, viernes3:viernes3, sabado3:sabado3 },function(datos){
            $('#respuesta').html(datos);
        });
        

  });
</script>