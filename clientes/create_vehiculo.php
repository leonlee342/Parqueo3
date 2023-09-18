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
    <h2>Añadir vehiculo de Docentes</h2>
    <br>

    <script>
                $(document).ready(function() {
                    $('#table_id').DataTable( {
                        "pageLength": 5,
                        "language": {
                            "emptyTable": "No hay información",
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Clientes",
                            "infoEmpty": "Mostrando 0 a 0 de 0 Clientes",
                            "infoFiltered": "(Filtrado de _MAX_ total Clientes)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ Clientes",
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
            <th>Placa</th>            
            <th>Marca</th>        
            <th>Modelo</th>        
            <th>Color</th>     
            <th><center>Accion</center></th>
        </thead>

        <tbody>
        <?php

                $contador = 0;
                $query_usuario = $pdo->prepare("SELECT * FROM tb_clientes WHERE estado = '1'");
                $query_usuario->execute();
                $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
                foreach ($usuarios as $usuario){
                    $id = $usuario ['id'];
                    $nombres = $usuario['nombres'];                    
                    $sis_docente = $usuario['sis_docente'];                                   
                    $placa_auto = $usuario['placa_auto'];                    
                    $contador = $contador + 1;

                $placa ="";
                $marca ="";
                $modelo ="";
                $color ="";
                $query_vehiculo = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE sis_docente = '$sis_docente' AND estado = '1'");
                $query_vehiculo->execute();
                $vehiculos = $query_vehiculo->fetchAll(PDO::FETCH_ASSOC);
                foreach ($vehiculos as $vehiculo){
                  $placa = $vehiculo ['placa'];
                  $marca = $vehiculo ['marca'];
                  $modelo = $vehiculo ['modelo'];
                  $color = $vehiculo ['color'];
                }


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
                      <a href="editar_vehiculo.php?sis=<?php echo $sis_docente;?>&&nombre=<?php echo $nombres;?>" class="btn btn-success">Editar</a>
                      <!-- <a href="#.php?id=<?php echo $id;?>" class="btn btn-danger">Borrar</a> -->
                      </center>
                    </td>
                </tr>


            <?php
                }

            ?> 
        </tbody>
    
    </table>
    </div>

    <br>
<!--         <a href="generar-reporte.php" class="btn btn-primary">Generar reporte
          <i class="fa fa">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
              <path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v6zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>
              <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
            </svg>
          </i>
        </a> -->

    </div>
      <!-- /.content-wrapper -->
    <?php  include('../layout/admin/footer.php');?>
</div>
    <?php  include('../layout/admin/footer_link.php');?>
</body>
</html>