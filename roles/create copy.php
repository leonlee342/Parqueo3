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

        <h2>Creacion de un nuevo rol</h2>

        <div class="containe">
          <div class="row">
            <div class="col-md-6">
                           <!-- ESta es la parte del inicio del card de boopstrap-->   
                <div class="card" style="border: 1px solid #606060">
                    <div class="card-header" style="background-color: #007bff;color: #ffffff">
                      <h4>Nuevo rol</h4>
                    </div>
                    <div class="card-body">
                     <div class="form-group">
                        <div class="label">Nombre</div>
                        <input type="text" class="form-control" id="nombre">
                     </div>
     
                     <div class="form-group">
                        <button class="btn btn-primary" id="btn_guardar">Guardar</button>
                        <a href="<?php echo $URL;?>/roles/" class="btn btn-danger">Cancelar</a>
                     </div>
                       <!-- /.esta es la respuesta del jquery -->
                     <div id="respuesta">
                   
                     </div>
                       <!-- /.esta es la respuesta del jquery -->
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>

     </div>
   
  </div>
  <!-- /.content-wrapper -->
  <?php  include('../layout/admin/footer.php');?>
</div>
<?php  include('../layout/admin/footer_link.php');?>
</body>
</html>

<!-- En esta parte utulizare j-query, ayax para que la pagina no tenga que refrescarse  (alert(nombres +"-" +email);)-->
<script>
    $('#btn_guardar').click(function(){
      var nombre = $('#nombre').val();

      if(nombre==""){
        alert("Debe de llenar este campo Nombre");
        $('#nombre').focus();
        }else{
              // Esta es la parte que esta llamando al controlador de ajax; se puedeenviar por post o get
              var url = 'controller_create.php';
              $.get(url, {nombre:nombre }, function(datos){
              $('#respuesta').html(datos);
        });
        // Esta es la parte que esta llamando al controlador de ajax
      }
    });
</script>
