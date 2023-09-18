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
            $query_usuario = $pdo->prepare("SELECT * FROM tb_clientes WHERE id = '$id_get' AND estado = '1' ");
            $query_usuario->execute();
            $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
            foreach($usuarios as $usuario) {
                $id = $usuario['id'];
                $nombres = $usuario['nombres'];
                $ci = $usuario['ci'];
                $sis_docente = $usuario['sis_docente'];
                $password_docente = $usuario['password_docente'];
                $email = $usuario['email'];
                $telefono = $usuario['telefono'];
            }
            ?>

            <h2>Actualización de Datos del Docente</h2>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="card card-success" style="border: 1px solid #777777">
                            <div class="card-header">
                                <h3 class="card-title">Edición del Docente</h3>
                                          <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                                            <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            </div>
                                          <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nombres:</label>
                                    <input type="text" class="form-control" id="nombres" value="<?php echo $nombres;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">CI:</label>
                                    <input type="text" class="form-control" id="ci" value="<?php echo $ci;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Codigo SIS del Docente:</label>
                                    <input type="text" class="form-control" id="sis_docente" value="<?php echo $sis_docente;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Password del Docente:</label>
                                    <input type="text" class="form-control" id="password_docente" value="<?php echo $password_docente;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" class="form-control" id="email" value="<?php echo $email;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Telefono:</label>
                                    <input type="text" class="form-control" id="telefono" value="<?php echo $telefono;?>">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" id="btn_editar">Actualizar</button>
                                    <a href="<?php echo $URL;?>/clientes/" class="btn btn-default">Cancelar</a>
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
        var ci = $('#ci').val();
        var sis_docente = $('#sis_docente').val();
        var password_docente = $('#password_docente').val();
        var email = $('#email').val();
        var telefono = $('#telefono').val();
        var id_user = '<?php echo $id_get = $_GET['id'];?>';
                  // alert (id_user); este alert solo fue para probar que la variable id se esta enviando; fijate en el formato para enviar a otroarchivo php
        if(nombres == ""){
            alert('Debe de llenar el campo nombres');
            $('#nombres').focus();
        }else if(ci == ""){
            alert('Debe de llenar el campo de CI');
            $('#ci').focus();   
        }else if(sis_docente == ""){
            alert('Debe de llenar el campo de SIS docente');
            $('#sis_docente').focus(); 
        }else if(password_docente == ""){
            alert('Debe de llenar el campo de password');
            $('#password_docente').focus(); 
        }else if(email == ""){
            alert('Debe de llenar el campo de email');
            $('#email').focus();
        }else if(telefono == ""){
            alert('Debe de llenar el campo de telefono');
            $('#telefono').focus();
        }else{
          // Esta es la parte que esta llamando al controlador de ajax; se puedeenviar por post o get
            var url = 'controller_update.php';
            $.get(url,{nombres:nombres, ci:ci, sis_docente:sis_docente, password_docente:password_docente, email:email, telefono:telefono,id_user:id_user},function (datos) {
                $('#respuesta').html(datos);
            });
        }
    });
    </script> 
