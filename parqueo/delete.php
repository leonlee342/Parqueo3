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
            $query_rol = $pdo->prepare("SELECT * FROM tb_mapeos WHERE id_map = '$id_get' AND estado = '1' ");
            $query_rol->execute();
            $roles = $query_rol->fetchAll(PDO::FETCH_ASSOC);
            foreach($roles as $role) {
                $id_map = $role['id_map'];
                $nro_espacio = $role['nro_espacio'];
                $estado_espacio = $role['estado_espacio'];
            }
            ?>

            <h2>Eliminacion del Lugar del Parqueó</h2>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="card card-danger" style="border: 1px solid #777777">
                            <div class="card-header">
                                <h3 class="card-title">¿Esta seguro de eliminar este registro?</h3>
                                          <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                                            <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            </div>
                                          <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Numero de espacio:</label>
                                    <input type="text" class="form-control" id="nombres" value="<?php echo $nro_espacio;?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="">Estado del espacio:</label>
                                    <input type="email" class="form-control" id="email" value="<?php echo $estado_espacio;?>" disabled>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-danger" id="btn_borrar">Borrar</button>
                                    <a href="<?php echo $URL;?>/parqueo/mapeo_de_vehiculos.php" class="btn btn-default">Cancelar</a>
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
    $('#btn_borrar').click(function () {

        var id_map = '<?php echo $id_get = $_GET['id'];?>';
             
          // Esta es la parte que esta llamando al controlador de ajax; se puedeenviar por post o get
        var url = 'controller_delete_espacio.php';
        $.get(url,{id_map:id_map},function (datos) {
                $('#respuesta').html(datos);
        });
        }
    );
</script>
