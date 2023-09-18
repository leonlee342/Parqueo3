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
    <h2>Solicitudes de Parqueo Compartido</h2>
    <br>


    <table id="" class="table table-bordered table-sm table-striped">


        <th><center>Nro</center></th>
        <th><center>Propietario Sitio</center></th>
        <th>Nro espacio</th>
        <th>Usuario Compartido</th>
        <th>Placa</th>
  <!--       <th>Fecha uso</th>
        <th>Hora Inicio</th>
        <th>Hora Fin</th> 
        <th><center>Accion</center></th> -->
    

    
    <?php
                $contador = 0;
                $query_compartido = $pdo->prepare("SELECT * FROM tb_solicitud_compartido WHERE estado = '1'");
                $query_compartido->execute();
                $compartidos = $query_compartido->fetchAll(PDO::FETCH_ASSOC);
                foreach ($compartidos as $compartido){
                    $id_compartido = $compartido ['id_compartido'];
                    $propietario = $compartido['propietario'];
                    $nro_espacio = $compartido['nro_espacio'];
                    $nombre_usuario = $compartido['nombre_usuario'];
                    $placa = $compartido['placa'];
/*                     $fecha_inicio = $compartido['fecha_inicio'];                    
                    $hora_inicio = $compartido['hora_inicio'];   
                    $hora_final = $compartido['hora_final'];   */ 
                    $contador = $contador + 1;
          ?>
                <tr>
                    <td><center><?php echo $contador;?></center></td>
                    <td><?php echo $propietario;?></td>
                    <td><?php echo $nro_espacio;?></td>
                    <td><?php echo $nombre_usuario;?></td>
                    <td><?php echo $placa;?></td>
<!--                     <td><?php echo $fecha_inicio;?></td>
                    <td><?php echo $hora_inicio;?></td>
                    <td><?php echo $hora_final;?></td> -->
                    <td>
                      <center>
                      <!-- <a href="#" class="btn btn-success">Asignar</a> -->
                      <!-- <a href="#" class="btn btn-danger">Rechazar</a> -->
<!--                       <a href="update_vehiculo.php?id=<?php echo $id;?>" class="btn btn-success">Editar</a>
                      <a href="delete_vehiculo.php?id=<?php echo $id;?>" class="btn btn-danger">Borrar</a> -->
                      </center>
                    </td>
                </tr>

            <?php
                }
            ?>  
    

    </table>
    </div>
    </div>
      <!-- /.content-wrapper -->
    <?php  include('../layout/admin/footer.php');?>
</div>
    <?php  include('../layout/admin/footer_link.php');?>
</body>
</html>