<?php include('../app/config.php');
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

        <h2>Mensajes  Correo electronico</h2>
        <br>

        <form action="controller_enviar.php" name="enviar" method="post" class="">
            <label>Correo:</label>
            <input type="text" name="correo">
            <br>
            <label>Asunto:</label>
            <input type="text" name="asunto">
            <br>
            <label>Mensaje:</label><br>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
            <br><br>
            <button class="btn btn-success">enviar</button>


        </form>




    </div>
   
  </div>
  <!-- /.content-wrapper -->
  <?php  include('../layout/admin/footer.php');?>
</div>
<?php  include('../layout/admin/footer_link.php');?>
</body>
</html>