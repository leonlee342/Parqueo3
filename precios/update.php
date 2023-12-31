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
            <h2>Actualización de precios</h2>
            <br>

            <div class="row">
                <div class="col-md-10">
                     <!-- INICIO TARJETA -->
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos cuidadosamente</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                            <!-- ---------INICIO FORMULARIO----- -->
                            <div class="card-body">

                                    <?php
                                        $id_precio_get = $_GET['id'];                                        
                                        $query_precios = $pdo->prepare("SELECT * FROM tb_precios WHERE id_precio = '$id_precio_get' AND estado = '1' ");
                                        $query_precios->execute();
                                        $datos_precios = $query_precios->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($datos_precios as $datos_precio){                                            
                                            $id_precio = $datos_precio['id_precio'];
                                            $cantidad = $datos_precio['cantidad'];
                                            $detalle = $datos_precio['detalle'];
                                            $precio = $datos_precio['precio'];       
                                        }                   
                                    ?>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="">Cantidad <span style="color: red"><b>*</b></span></label>
                                            <!-- <input type="number" id="cantidad" value="<?php echo $cantidad;?>" class="form-control"> -->
                                            <select name="" id="cantidad" class="form-control">                    
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="">Detalle</label>
                                            <select name="" id="detalle" class="form-control">

                                                <?php
                                                    if($detalle == "HORAS"){ ?>
                                                        <option value="HORAS">HORAS</option>
                                                        <option value="DIAS">DIAS</option>
                                                        <option value="MES">MES</option>
                                                    <?php
                                                    }else if($detalle == "DIAS"){ ?>
                                                        <option value="DIAS">DIAS</option>
                                                        <option value="HORAS">HORAS</option>
                                                        <option value="MES">MES</option>
                                                    <?php
                                                    }else{ ?>
                                                        <option value="MES">MES</option>
                                                        <option value="DIAS">DIAS</option>
                                                        <option value="HORAS">HORAS</option>
                                                       
                                                <?php
                                                    }                                                
                                                ?>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="">Precio <span style="color: red"><b>*</b></span></label>
                                            <!-- <input type="number" value="<?php echo $precio;?>" id="precio" class="form-control"> -->
                                            <select name="" id="precio" class="form-control">                    
                                                <option value="75">75</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="index.php" class="btn btn-default">Cancelar</a>
                                            <button class="btn btn-success" id="btn_actualizar_precio">Actualizar precio</button>
                                        </div>
                                    </div>

                                        <script>
                                            $('#btn_actualizar_precio').click(function(){
                                               var cantidad = $('#cantidad').val();
                                               var detalle = $('#detalle').val();
                                               var precio = $('#precio').val();
                                               var id_precio = <?php echo $id_precio_get;?>;
                                                  
                                                if(cantidad == ""){
                                                    alert("Debe llenar el campo Cantidad");
                                                    $('#cantidad').focus();
                                                }else if(precio == ""){
                                                    alert("Debe llenar el campo Precio");
                                                    $('#precio').focus();
                                                }else{
                                                    var url = 'controller_update.php';
                                                    $.get(url, {cantidad:cantidad, detalle:detalle, precio:precio, id_precio:id_precio}, function(datos){
                                                     $('#respuesta').html(datos);
                                                    });
                                                }
                                            });
                                        </script>
                                </div>
                                                <div id="respuesta">

                                                </div>
                            </div>
                            <!-- ---------FIN FORMULARIO----- -->

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

