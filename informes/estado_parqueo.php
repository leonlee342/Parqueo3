<?php include('../app/config.php');
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
<?php  include('../layout/admin/menu.php');?>


  <div class="content-wrapper">
    <br>
    <div class="container">

        <h2>Informes Estado del Parqueo - FCYT</h2>

        <br>

            <script>
                $(document).ready(function() {
                    $('#table_id').DataTable( {
                        "pageLength": 5,
                        "language": {
                            "emptyTable": "No hay información",
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Informes",
                            "infoEmpty": "Mostrando 0 a 0 de 0 Informes",
                            "infoFiltered": "(Filtrado de _MAX_ total Informes)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ Informes",
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

        <table id="table_id" class="table table-bordered table-sm table-striped" >
          <thead>
            <th><center>Nro</center></th>
            <th>Cliente</th>            
            <th>Placa</th>
            <th>Nro. Espacio</th>
            <th>Fecha ingreso</th>
            <th>Estado espacio</th>            
            
          </thead>

        <tbody>
                <?php
                $contador = 0;
                $query_tickets = $pdo->prepare("SELECT * FROM tb_tickets");
                $query_tickets->execute();
                $tickets = $query_tickets->fetchAll(PDO::FETCH_ASSOC);
                foreach ($tickets as $ticket){                    
                    $nombre_cliente = $ticket['nombre_cliente'];
                    $placa_auto = $ticket['placa_auto'];
                    $cuviculo = $ticket['cuviculo'];
                    $fecha_ingreso = $ticket['fecha_ingreso'];
                    $estado_ticket = $ticket['estado_ticket'];                    
                    $contador = $contador + 1;
          ?>
                    <tr>
                    <td><center><?php echo $contador;?></center></td>
                    <td><?php echo $nombre_cliente;?></td>
                    <td><?php echo $placa_auto;?></td>
                    <td><?php echo $cuviculo;?></td>
                    <td><?php echo $fecha_ingreso;?></td>
                    <td><?php echo $estado_ticket;?></td>                    

                  </tr>
          <?php
                }

          ?>
        </tbody>


        </table>
                <br>
<!--         <a href="#" class="btn btn-primary">Generar reporte
          <i class="fa fa">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
              <path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v6zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>
              <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
            </svg>
          </i>
        </a> -->

    </div>
   
  </div>
  <!-- /.content-wrapper -->
  <?php  include('../layout/admin/footer.php');?>
</div>
<?php  include('../layout/admin/footer_link.php');?>
</body>
</html>