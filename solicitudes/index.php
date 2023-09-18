<?php include('../app/config.php');
      include('../layout/admin/datos_usuario_sesion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php  include('../layout/admin/head.php');?>
    <title>Vehiculos</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
      <!-- MESta parte esta en menu.php-->
        <?php  include('../layout/admin/menu.php');?>

    <div class="content-wrapper">
    <br>
    <div class="container">
    <h2>Solicitudes de Lugares de Parqueo</h2>
    <br>

    <script>
                $(document).ready(function() {
                    $('#table_id').DataTable( {
                        "pageLength": 5,
                        "language": {
                            "emptyTable": "No hay información",
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Solicitudes",
                            "infoEmpty": "Mostrando 0 a 0 de 0 Solicitudes",
                            "infoFiltered": "(Filtrado de _MAX_ total Solicitudes)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ Solicitudes",
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
        <th><center>Nombres</center></th>
        <th>SIS Docente</th>
        <th><center>Placa</center></th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>        
        <th><center>Accion</center></th>
    </thead>

    <tbody>
    <?php
                $contador = 0;
                $query_usuario = $pdo->prepare("SELECT * FROM tb_solicitud_vehiculo WHERE estado = '1'");
                $query_usuario->execute();
                $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
                foreach ($usuarios as $usuario){
                    $id = $usuario ['id'];
                    $nombres = $usuario ['nombres'];
                    $placa = $usuario['placa'];
                    $sis_docente = $usuario['sis_docente'];
                    $marca = $usuario['marca'];
                    $modelo = $usuario['modelo'];
                    $color = $usuario['color'];                    
                    $contador = $contador + 1;
          ?>
                <tr>
                    <td><center><?php echo $contador;?></center></td>
                    <td><?php echo $nombres;?></td>
                    <td><?php echo $sis_docente;?></td>
                    <td><?php echo $placa;?></td>
                    <td><?php echo $marca;?></td>
                    <td><?php echo $modelo;?></td>
                    <td><?php echo $color;?></td>
                    
                    <td>
                      <center>
                      <a href="controller_asignar_vehiculo.php?id=<?php echo $id;?>" class="btn btn-success">Asignado</a>
                      <!-- <a href="#" class="btn btn-danger">Rechazar</a> -->
<!--                       <a href="update_vehiculo.php?id=<?php echo $id;?>" class="btn btn-success">Editar</a>
                      <a href="delete_vehiculo.php?id=<?php echo $id;?>" class="btn btn-danger">Borrar</a> -->
                      </center>
                    </td>
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