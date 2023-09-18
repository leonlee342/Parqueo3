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

        <h2>Ingresar Vehiculo del Cliente</h2>

        <div class="containe">
          <div class="row">
            <div class="col-md-6">
                           <!-- ESta es la parte del inicio del card de boopstrap-->   
                <div class="card" style="border: 1px solid #606060">
                    <div class="card-header" style="background-color: #007bff;color: #ffffff">
                      <h4>Nuevo Vehiculo</h4>
                    </div>
                    <div class="card-body">
                      <!-- -------------------------------------  -->
                    <?php
                        $query_clientes = $pdo->prepare("SELECT * FROM tb_clientes WHERE estado = '1'");
                        $query_clientes->execute();
                        $clientes = $query_clientes->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($clientes as $cliente){
                          $id = $cliente ['id'];
                          $nombres = $cliente['nombres'];
                          $ci = $cliente['ci']; 
                        }
                    ?>

                      <!-- ------------------------------- -->

                     <div class="form-group">
                        <div class="label">Placa</div>
                        <input type="text" class="form-control" id="placa">
                     </div>
                     <div class="form-group">
                        <div class="label">Marca</div>
                        <input type="text" class="form-control" id="marca">
                     </div>
                     <div class="form-group">
                        <div class="label">Modelo</div>
                        <input type="email" class="form-control" id="modelo">
                     </div>
                     <div class="form-group">
                        <div class="label">Color</div>
                        <input type="text" class="form-control" id="color">
                     </div>
                     <div class="form-group row">
                        <label for="staticEmail" class="col-ms-2 col-form-label">SIS/CI Cliente:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="cliente_buscar">
                        </div>
                        <div class="col-ms-3">
                          <button class="btn btn-primary" id="btn_buscar_cliente" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                            Buscar
                          </button>
                          <script>
                            $('#btn_buscar_cliente').click(function(){
                              var cliente = $('#cliente_buscar').val();
                              if(cliente==""){
                              alert("Debe de llenar el campo CI/SIS Cliente");
                                $('#cliente_buscar').focus();
                              }else{
                                var url = 'controller_buscar_cliente.php';
                                $.get(url, {cliente:cliente}, function(datos){
                                $('#respuesta_buscar_cliente').html(datos);
                              });
                            }
                            });
                          </script>
                          <div id="respuesta_buscar_cliente">
                   
                          </div>
                        </div>
                        
                     </div>
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
      var placa = $('#placa').val();
      var marca = $('#marca').val();
      var modelo = $('#modelo').val();
      var color = $('#color').val();
      
      if(placa==""){
        alert("Debe de llenar el campo Placa");
        $('#placa').focus();
      }else if(marca == ""){
        alert("Debe de llenar el campo marca");
        $('#marca').focus();
      }else if(modelo == ""){
        alert("Debe de llenar el campo modelo");
        $('#modelo').focus();
        }else  if(color == ""){
        alert("Debe de llenar el campo Telefono");
        $('#color').focus();
        }else
        {     // Esta es la parte que esta llamando al controlador de ajax; se puedeenviar por post o get
              var url = 'controller_create_vehiculo.php';
              $.get(url, {placa:placa ,marca:marca, modelo:modelo, color:color}, function(datos){
              $('#respuesta').html(datos);
        });
        // Esta es la parte que esta llamando al controlador de ajax
      }
    });
</script>