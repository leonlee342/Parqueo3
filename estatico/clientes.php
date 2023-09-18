<?php 
      include('../app/config.php');
      include('../layout/admin/datos_usuario_sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php  include('../layout/admin/head.php');?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- MESta parte esta en menu.php-->
<?php  include('../layout/admin/menu.php');?>


  <div class="content-wrapper">
    <br>
    <div class="container">

        <h2>Listado de Usuarios</h2>

        <br>
        <table class="table table-bordered table-sm table-striped" >
          <th><center>Nro</center></th>
          <th>Nombre de Usuarios</th>
          <th>Email</th>
          <th><center>Accion</center></th>


                    <tr>
                    <td><center>1</center></td>
                    <td>Eddy Wilder Condori Guzman </td>
                    <td>leonlee342@gmail.com</td>
                    <td>
                    <center>
                      <a href="update.php?id=<?php echo $id;?>" class="btn btn-success">Editar</a>
                      <a href="delete.php?id=<?php echo $id;?>" class="btn btn-danger">Borrar</a>
                      </center>
                    </td>
                    <td>

                    <tr>
                    <td><center>1</center></td>
                    <td>Loida Cano Cucho</td>
                    <td>loida@gmail.com</td>
                    <td>
                      <center>
                      <a href="update.php?id=<?php echo $id;?>" class="btn btn-success">Editar</a>
                      <a href="delete.php?id=<?php echo $id;?>" class="btn btn-danger">Borrar</a>
                      </center>
                    </td>
                  </tr>
          <?php
                

          ?>


        </table>
     

    </div>
   
  </div>
  <!-- /.content-wrapper -->
  <?php  include('../layout/admin/footer.php');?>
</div>
<?php  include('../layout/admin/footer_link.php');?>
</body>
</html>