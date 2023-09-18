<?php include('../app/config.php');
      include('../layout/admin/datos_usuario_sesion.php');

$id_registro = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php  include('../layout/admin/head.php');?>
    <title>Cobros de cuotas</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
      <!-- MESta parte esta en menu.php-->
        <?php  include('../layout/admin/menu.php');?>

    <div class="content-wrapper">
    <br>
    <div class="container">
    <h2>Cobros de lugares de parqueo</h2>
    <br>

    <table id="#" class="table table-bordered table-sm table-striped">

    <thead>
        <th><center>Nro</center></th>    
        <th>Docente</th>
        <th>Ci/Sis</th>
        <th>Placa</th>
        <th>Fecha de Cobro</th>
        <th>Cuota</th>
        <th><center>Accion</center></th>
    </thead>

    <tbody>
    <?php
                $contador = 0;
                $query_cobro = $pdo->prepare("SELECT * FROM tb_registros WHERE id_registro = '$id_registro' AND estado = '1'");
                $query_cobro->execute();
                $cobros = $query_cobro->fetchAll(PDO::FETCH_ASSOC);
                foreach ($cobros as $cobro){
                    $id_registro = $cobro ['id_registro'];
                    $nombre_cliente = $cobro['nombre_cliente'];
                    $nit_ci = $cobro['nit_ci'];
                    $placa = $cobro['placa'];
                    $primer_cobro = $cobro['primer_cobro']; 
                    $cuota = $cobro['cuota'];                                     
                    $contador = $contador + 1;
    
    
                if($cuota > 0){?>

                <tr>
                    <td><center><?php echo $contador;?></center></td>
                    <td><?php echo $nombre_cliente;?></td>
                    <td><?php echo $nit_ci;?></td>
                    <td><?php echo $placa;?></td>                    
                    <td><?php echo $primer_cobro;?></td>
                    <td><?php echo $cuota;?>.  Bs</td>
                    <td>
                      <center>
                      <a href="controller_realizar_cobro.php?id=<?php echo $id_registro;?>" class="btn btn-success">Cobrar</a>                      
<!--                       <a href="update_vehiculo.php?id=<?php echo $id;?>" class="btn btn-success">Editar</a>
                      <a href="delete_vehiculo.php?id=<?php echo $id;?>" class="btn btn-danger">Borrar</a> -->
                      </center>
                    </td>
                </tr>
                <?php
                }
                ?>


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