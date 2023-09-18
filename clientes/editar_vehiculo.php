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
            $placa = "";
            $marca = "";
            $modelo = "";
            $color = "";
            // $id_get = $_GET['id'];
            $sis_docente = $_GET['sis'];
            $nombre = $_GET['nombre'];
            $query_usuario = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE sis_docente = '$sis_docente' AND estado = '1' ");
            $query_usuario->execute();
            $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
            foreach($usuarios as $usuario) {
                $placa = $usuario['placa'];
                $marca = $usuario['marca'];
                $modelo = $usuario['modelo'];
                $color = $usuario['color'];
            }
            ?>

            <h2>Agregar vehiculo del cliente</h2>

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
                                    <input type="text" class="form-control" id="placa" value="<?php echo $placa;?>" placeholder="Ej: 5555LLL" >
                                </div>
                                <div class="form-group">
                                    <label for="">Marca</label>
                                    <input type="text" class="form-control" id="marca" value="<?php echo $marca;?>" placeholder="Ej: TOYOTA">
                                </div>
                                <div class="form-group">
                                    <label for="">Modelo</label>
                                    <input type="email" class="form-control" id="modelo" value="<?php echo $modelo;?>" placeholder="Ej: NISSAN">
                                </div>
                                <div class="form-group">
                                    <label for="">Color</label>
                                    <input type="text" class="form-control" id="color" value="<?php echo $color;?>" placeholder="Ej: PLOMO">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" id="btn_editar">Actualizar</button>
                                    <a href="<?php echo $URL;?>/clientes/create_vehiculo.php" class="btn btn-default">Cancelar</a>
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
        var sis_docente2 = '<?php echo $sis_get = $_GET['sis'];?>';
        var nombre2 = '<?php echo $nombre_get = $_GET['nombre'];?>';
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
            var url = 'controller_editar_vehiculo.php';
            $.get(url,{placa:placa, marca:marca, modelo:modelo, color:color,sis_docente2:sis_docente2,nombre2:nombre2},function (datos) {
                $('#respuesta').html(datos);
            });
        }
    });
    </script> 
