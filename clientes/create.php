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
<!-- <?php  include('../layout/admin/menu.php');?> -->

  <div class="content-wrapper">
    
    <div class="container">

        <h2>Creacion de Nuevos Docentes</h2>

        <div class="containe">
          <div class="row">
            <div class="col-md-6">
                           <!-- ESta es la parte del inicio del card de boopstrap-->   
                <div class="card" style="border: 1px solid #606060">
                    <div class="card-header" style="background-color: #007bff;color: #ffffff">
                      <h4>Nuevo Cliente</h4>
                    </div>
                    <div class="card-body">
                     <div class="form-group">
                        <div class="label">Nombres</div>
                        <input type="text" class="form-control" id="nombres" placeholder="Nombre Apellido" >
                     </div>
                     <div class="form-group">
                        <div class="label">CI</div>
                        <input type="text" class="form-control" id="ci" placeholder="45454545" >
                     </div>
                     <div class="form-group">
                        <div class="label">Codigo SIS</div>
                        <input type="text" class="form-control" id="sis_docente" placeholder="200508859" >
                     </div>
                   
<!--                      <div class="form-group">
                        <div class="label">Password</div>
                        <input type="text" class="form-control" id="password_docente">
                     </div -->
                     <div class="form-group">
                        <div class="label">Email</div>
                        <input type="email" class="form-control" id="email" placeholder="usuario@umss.edu.bo" >
                     </div>
                     <div class="form-group">
                        <div class="label">Telefono</div>
                        <input type="text" class="form-control" id="telefono" placeholder="7575757" >
                     </div>
<!--                      <div class="form-group">
                        <div class="label">Placa</div>
                        <input type="text" class="form-control" id="placa">
                     </div> -->
                     <div class="form-group">
                        <button class="btn btn-primary" id="btn_guardar">Guardar</button>
                        <a href="<?php echo $URL;?>/clientes/" class="btn btn-danger">Cancelar</a>
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
    <!-- <?php  include('../layout/admin/footer.php');?>  -->
</div>
    <?php  include('../layout/admin/footer_link.php');?> 
</body>
</html>

<script>
    $('#btn_guardar').click(function(){
      var nombres = $('#nombres').val();
      var ci = $('#ci').val();
      var sis_docente = $('#sis_docente').val();
      var password_docente = $('#ci').val();
      var email = $('#email').val();
      var telefono = $('#telefono').val();
      // var placa = $('#placa').val();
      
      if(nombres==""){
        alert("Debe de llenar el campo Nombres");
        $('#nombres').focus();
      }else if(ci == ""){
        alert("Debe de llenar el campo ci");
        $('#ci').focus();
      }else if(sis_docente == ""){
        alert("Debe de llenar el campo codigo SIS del Docente");
        $('#sis_docente').focus();
      }else if(email == ""){
        alert("Debe de llenar el campo Email");
        $('#email').focus();
       }else  if(telefono == ""){
        alert("Debe de llenar el campo Telefono");
        $('#telefono').focus();
       }else
        {     // Esta es la parte que esta llamando al controlador de ajax; se puedeenviar por post o get
              var url_1 = 'controller_create.php';
              $.get(url_1, {nombres:nombres ,ci:ci, sis_docente:sis_docente, password_docente:password_docente, email:email, telefono:telefono}, function(datos){
              $('#respuesta').html(datos);                                
        });
        // Esta es la parte que esta llamando al controlador de ajax
/*         var url_2 = 'controller_create_tabla_docentes.php';
              $.get(url_2, {nombres:nombres ,ci:ci, placa:placa}, function(datos){
              $('#respuesta').html(datos);                                
        }); */
      }
    });
</script>