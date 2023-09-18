<?php 
include('app/config.php');
include('layout/admin/datos_usuario_sesion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('layout/admin/head.php'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- nabvar inicio -->
    <?php include('layout/admin/menu.php'); ?>
  <!-- nabvar final -->

  <!-- Main Sidebar Container -->
  <!-- FINALMain Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
        
          <h2>Añadir vehiculo del Docente</h2>

            <div class="container">
              <div class="row">
                <div class="col-md-6">


            <?php
            // $id_get = $_GET['id'];
            $id_get = "1";
            $query_cliente = $pdo->prepare("SELECT * FROM tb_clientes WHERE id = '$id_get' AND estado = '1' ");
            $query_cliente->execute();
            $clientes = $query_cliente->fetchAll(PDO::FETCH_ASSOC);
            foreach($clientes as $cliente) {
                $id = $cliente['id'];
                $nombres = $cliente['nombres'];
                $ci = $cliente['ci'];
                $email = $cliente['email'];
                $telefono = $cliente['telefono'];
            }
            ?>



  <!-- INicio card -->
  <div class="card card-danger" style="border: 1px solid #777777">
                  <div class="card-header" style="background-color: #007bff; color: #ffffff">
                      <h3 class="card-title">Cliente - Docente</h3>
                      <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                              </button>
                          </div>
                      <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                  </div>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Nombres</label>
                              <input type="text" class="form-control" id="nombres" value="<?php echo $nombres;?>" disabled>
                          </div>
                          <div class="form-group">
                            <label for="">CI</label>
                            <input type="text" class="form-control" id="ci" value="<?php echo $ci;?>" disabled>
                          </div>
                          <div class="form-group">
                             <label for="">Email</label>
                             <input type="email" class="form-control" id="email" value="<?php echo $email;?>" disabled>
                          </div>
                          <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="text" class="form-control" id="telefono" value="<?php echo $telefono;?>" disabled>
                          </div>
                          <div class="form-group">
                            <!-- <button class="btn btn-danger" id="#S">Borrar</button> -->
                            <!-- <a href="#" class="btn btn-default">Cancelar</a> -->
                          </div>
                                <!--<div id="respuesta">

                                    </div> -->
                        </div>
                  </div>  
                  
   <!-- FIN card -->

                </div>
   <!-- *****otra cart** -->
              <div class="col-md-6">
                <div class="card card-danger" style="border: 1px solid #777777">
                  <div class="card-header" style="background-color: #007bff; color: #ffffff">
                      <h3 class="card-title">Ingresar Nuevo Vehiculo</h3>
                      <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                              </button>
                          </div>
                      <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                  </div>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Placa:</label>
                              <input type="text" class="form-control" id="nombres" >
                          </div>
                          <div class="form-group">
                            <label for="">Marca:</label>
                            <input type="text" class="form-control" id="ci" >
                          </div>
                          <div class="form-group">
                             <label for="">Modelo:</label>
                             <input type="email" class="form-control" id="email" >
                          </div>
                          <div class="form-group">
                            <label for="">Color:</label>
                            <input type="text" class="form-control" id="telefono" >
                          </div>
                          <div class="form-group">
                            <button class="btn btn-success" id="btn_borrar">Añadir</button>
                            <a href="<?php echo $URL;?>/clientes/" class="btn btn-default">Cancelar</a>
                          </div>
                                <!--<div id="respuesta">

                                    </div> -->
                        </div>
                  </div>
                </div>

                  
                 <!-- *****fin cart** -->

                </div>
             </div>
          
        </div>
<!-- *****inicio container 2** -->
    <div class="container">
    <br>
            <h2>Listado de vehiculos </h2>
            <table class="table table-bordered table-sm table-striped">
              <th><center>Nro</center></th>
              <th>Placa</th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Color</th>
              <th><center>Acción</center></th>
 
               <!-- ?php -->
<!--            $contador = 0;
                $query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE estado = '1'");
                $query_usuario->execute();
                $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
                  foreach($usuarios as $usuario){
                      $id = $usuario['id'];
                      $nombres = $usuario['nombres'];
                      $email = $usuario['email'];
                      $contador = $contador + 1; -->
              <!-- ?>  -->
                    <tr>
                      <!-- <td><center><?php echo $contador;?></center></td> -->
                      <td><center>1</center></td>
                      <td><?php echo $nombres;?></td>
                      <td>Toyota</td>
                      <td>Toyota</td>
                      <td>Negro</td>
                      <td> 
                        <center>
                        <a href="" class="btn btn-success">Editar</a>
                        <a href="" class="btn btn-danger">Borrar</a>
                        </center>
                      </td>
                    </tr>
              <!-- ?php                    -->
              <!-- } -->
              <!-- ?> -->

            </table>
    </div>
<!-- *****fin container 2** -->
    </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <?php include('layout/admin/footer.php'); ?>
  <!-- FINAL Main Footer -->
</div>
<!-- ./wrapper -->

<?php include('layout/admin/footer_link.php'); ?>
</body>
</html>

<script>
  $('#btn_guardar').click(function(){
    var nombres = $('#nombres').val();  
    var email = $('#email').val();  
    var password_user = $('#password_user').val(); 

    if(nombres == ""){
      alert ("Debe llenar el campo nombres");
      $('#nombres').focus();
    }else if(email == ""){
      alert ("Debe llenar el campo email");
      $('#email').focus();
    }else if(password_user == ""){
      alert ("Debe llenar el campo password");
      $('#password_user').focus();
    }else{
        var url = 'controller_create.php';
        $.get(url, {nombres:nombres, email:email, password_user:password_user}, function(datos){
        $('#respuesta').html(datos);
        });
      }
  });
</script>