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
            $query_reclamo = $pdo->prepare("SELECT * FROM tb_realizar_reclamo WHERE id_reclamo = '$id_get' AND estado = '1' ");
            $query_reclamo->execute();
            $reclamos = $query_reclamo->fetchAll(PDO::FETCH_ASSOC);
            foreach($reclamos as $reclamo) {
                $id_reclamo = $reclamo['id_reclamo'];
                $asunto_reclamo = $reclamo['asunto_reclamo'];                
                $nombre_docente = $reclamo['nombre_docente'];  
                $redactar_reclamo = $reclamo['redactar_reclamo'];
            }
            ?>

            <h2>Reclamo de Clientes</h2>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="card card-success" style="border: 1px solid #777777">
                            <div class="card-header">
                                <h3 class="card-title">Reclamo de Docentes</h3>
                                          <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                                            <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            </div>
                                          <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Asunto:</label>
                                    <input type="text" class="form-control" id="nombres" value="<?php echo $asunto_reclamo;?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="">Docente:</label>
                                    <input type="text" class="form-control" id="nombres" value="<?php echo $nombre_docente;?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="">Reclamo:</label>                                    
                                    <textarea name="" id="redactar_reclamo"  cols="60" rows="5" class="form-control" disabled><?php echo $redactar_reclamo;?></textarea >
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" id="btn_editar">Gestionar reclamo</button>
                                    <a href="<?php echo $URL;?>/reclamos/" class="btn btn-default">Cancelar</a>
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
        var nombres = $('#nombres').val();
        var email = $('#email').val();
        var password_user = $('#password_user').val();
        var id_user = '<?php echo $id_get = $_GET['id'];?>';
                  // alert (id_user); este alert solo fue para probar que la variable id se esta enviando; fijate en el formato para enviar a otroarchivo php
        if(nombres == ""){
            alert('Debe de llenar el campo nombres');
            $('#nombres').focus();
        }else if(email == ""){
            alert('Debe de llenar el campo de email');
            $('#email').focus();
        }else if(password_user == ""){
            alert('Debe de llenar el campo de password');
            $('#password_user').focus();
        }else{
          // Esta es la parte que esta llamando al controlador de ajax; se puedeenviar por post o get
            var url = 'controller_update.php';
            $.get(url,{nombres:nombres, email:email, password_user:password_user,id_user:id_user},function (datos) {
                $('#respuesta').html(datos);
            });
        }
    });
</script>
