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
            $query_docente = $pdo->prepare("SELECT * FROM tb_clientes WHERE  estado = '1' ");
            $query_docente->execute();
            $docentes = $query_docente->fetchAll(PDO::FETCH_ASSOC);
            foreach($docentes as $docente) {
                // $id_reclamo = $docente['id_reclamo'];

            }
            ?>

            <h2>Enviar Mensajes Globales e individuales</h2>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="card card-success" style="border: 1px solid #777777">
                            <div class="card-header">
                                <h3 class="card-title">Envio de mensajes</h3>
                                          <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                                            <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            </div>
                                          <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                            </div>

                            <div class="card-body">


                                <form action="controller_enviar_mensajes.php" name="enviar" method="POST" class="">
                                    <label>Asunto:</label>
                                    <input type="text" name="asunto" class="form-control" required>
                                    <br>
                                    <label>Docente:</label>
                                    <select name="docente" class="form-control">

                                    <?php
                                            $query_docentes = $pdo->prepare("SELECT * FROM tb_clientes WHERE estado = '1' ");
                                            $query_docentes->execute();
                                            $docentes = $query_docentes->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($docentes as $docente){
                                            $id = $docente['id'];
                                            $nombres = $docente['nombres'];
                                             ?>
                                             <option value="<?php echo $id;?>"><?php echo $nombres;?></option>
                                            <?php
                                        }
                                        ?>                                  
                                    
                                    </select>
                                    
                                    <br>
                                    <input type="text" name="id_docente" class="form-control" value="<?php echo $id;?>" hidden>
                                    <label>Mensaje:</label><br>
                                    <textarea name="mensaje" id="" cols="10" rows="5" class="form-control" required></textarea>
                                    <br>
                                    <button class="btn btn-success">Enviar mensaje</button>
                                    <a href="#" class="btn btn-default">Cancelar</a>


                                </form>

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



