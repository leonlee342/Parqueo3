<?php include('../app/config.php');
      include('../layout/admin/datos_usuario_sesion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php  include('../layout/admin/head.php');?>
    <title>Clientes</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
      <!-- MESta parte esta en menu.php-->
        <?php  include('../layout/admin/menu.php');?>

    <div class="content-wrapper">
    <br>
    <div class="container">
    <h2>Listado de Reclamos</h2>
    <br>

    <script>
                $(document).ready(function() {
                    $('#table_id').DataTable( {
                        "pageLength": 5,
                        "language": {
                            "emptyTable": "No hay información",
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Reclamos",
                            "infoEmpty": "Mostrando 0 a 0 de 0 Reclamos",
                            "infoFiltered": "(Filtrado de _MAX_ total Reclamos)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ Reclamos",
                            "loadingRecords": "Cargando...",
                            "processing": "Procesando...",
                            "search": "Buscador:",
                            "zeroRecords": "Sin resultados encontrados",
                            "paginate": {
                                "first": "Primero",
                                "last": "Ultimo",
                                "next": "Siguiente",
                                "previous": "Anterior"
                            }
                        }
                    });
                } );
            </script>

    <table id="table_id" class="table table-bordered table-sm table-striped">

    <thead>
        <th><center>Nro</center></th>
        <th>Nombres</th>        
        <th>SIS</th>
        <th>Descripción</th>
        <th>Fecha y Hora Reclamo</th>
        <!-- <th>Estado</th> SI DA TIEMPO COLOCAR EL ESTADO DE LA QUEJA ACTIVA O INACTIVO-->
        <th><center>Accion</center></th>
    </thead>

    <tbody>
    <?php
                $contador = 0;
                $query_reclamo = $pdo->prepare("SELECT * FROM tb_realizar_reclamo WHERE estado = '1'");
                $query_reclamo->execute();
                $reclamos = $query_reclamo->fetchAll(PDO::FETCH_ASSOC);
                foreach ($reclamos as $reclamo){
                    $id_reclamo = $reclamo ['id_reclamo'];
                    $nombre_docente = $reclamo['nombre_docente'];
                    $asunto_reclamo = $reclamo['asunto_reclamo'];
                    $sis_docente = $reclamo['sis_docente'];
                    $fyh_creacion = $reclamo['fyh_creacion'];                    
                    $contador = $contador + 1;
          ?>
                <tr>
                    <td><center><?php echo $contador;?></center></td>
                    <td><?php echo $nombre_docente;?></td>
                    <td><?php echo $sis_docente;?></td>
                    <td><?php echo $asunto_reclamo;?></td>
                    <td><?php echo $fyh_creacion;?></td>
                    <td>
                      <center>
                      <a href="ver_reclamo.php?id=<?php echo $id_reclamo;?>" class="btn btn-success">Ver reclamo</a>
                      <a href="delete.php?id=<?php echo $id;?>" class="btn btn-danger" data-toggle="modal" 
                                data-target="#exampleModa<?php echo $id_reclamo;?>">Eliminar reclamo</a>
                      </center>
                    </td>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModa<?php echo $id_reclamo;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel?id=<?php echo $id_reclamo;?>">¿Realmente quiere eliminar este mensaje?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                <form action="controller_eliminar_solicitud.php" method="POST" class="">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="fourm-group">
                                                <label>Descripción</label>
                                                <input type="text" name="nombre" id="" class="form-control" value="<?php echo $asunto_reclamo;?>" disabled>
                                                <input type="text" name="id_reclamo" class="form-control" value="<?php echo $id_reclamo;?>" hidden>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </div>
                                    

                                </form>

              
                        </div>
                        </div>

                </tr>                

            <?php
                }

            ?>    

            </tbody>


    </table>
    </div>
    </div>
      <!-- /.content-wrapper -->
    <?php  include('../layout/admin/footer.php');?>
</div>
    <?php  include('../layout/admin/footer_link.php');?>
</body>
</html>