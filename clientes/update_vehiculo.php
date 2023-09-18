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
         <?php include('../layout/admin/menu.php'); ?> 
    <div class="content-wrapper">
        <br>
        <div class="container">

            <?php
            $id_get = $_GET['id'];
            $query_usuario = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE id = '$id_get' AND estado = '1' ");
            $query_usuario->execute();
            $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
            foreach($usuarios as $usuario) {
                $placa = $usuario['placa'];
                $marca = $usuario['marca'];
                $modelo = $usuario['modelo'];
                $color = $usuario['color'];
            }
            ?>

            <h2>Actualización Datos del Vehiculo</h2>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="card card-success" style="border: 1px solid #777777">
                            <div class="card-header">
                                <h3 class="card-title">Edición del Vehiculo</h3>
                                          <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                                            <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            </div>
                                          <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Placa</label>
                                    <input type="text" class="form-control" id="placa" value="<?php echo $placa;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Marca</label>
                                    <input type="text" class="form-control" id="marca" value="<?php echo $marca;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Modelo</label>
                                    <input type="email" class="form-control" id="modelo" value="<?php echo $modelo;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Color</label>
                                    <input type="text" class="form-control" id="color" value="<?php echo $color;?>">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" id="btn_editar">Actualizar</button>
                                    <a href="<?php echo $URL;?>/clientes/listado_vehiculos.php" class="btn btn-default">Cancelar</a>
                                </div>
                                <div id="respuesta">

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <?php include('../layout/admin/footer.php'); ?> 
</div>
<?php include('../layout/admin/footer_link.php'); ?>
</body>
</html>

    <script>
    $('#btn_editar').click(function () {
        var placa = $('#placa').val();
        var marca = $('#marca').val();
        var modelo = $('#modelo').val();
        var color = $('#color').val();
        var id_user = '<?php echo $id_get = $_GET['id'];?>';
                  // alert (id_user); este alert solo fue para probar que la variable id se esta enviando; fijate en el formato para enviar a otroarchivo php
        if(placa == ""){
            alert('Debe de llenar el campo placa');
            $('#placa').focus();
        }else if(marca == ""){
            alert('Debe de llenar el campo de marca');
            $('#marca').focus();   
        }else if(modelo == ""){
            alert('Debe de llenar el campo de modelo');
            $('#modelo').focus();
        }else if(color == ""){
            alert('Debe de llenar el campo de color');
            $('#color').focus();
        }else{
          // Esta es la parte que esta llamando al controlador de ajax; se puedeenviar por post o get
            var url = 'controller_update_vehiculo.php';
            $.get(url,{placa:placa, marca:marca, modelo:modelo, color:color,id_user:id_user},function (datos) {
                $('#respuesta').html(datos);
            });
        }
    });
    </script> 
