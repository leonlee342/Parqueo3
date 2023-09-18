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

            <h2>Cobros por uso de parqueo - FCYT</h2>

            <br>
            <div class="row">
                <div class="col-md-12">

                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Nota: Solo se puede asignar lugares de parqueo del 1ro al 10 de cada mes.</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="card-body" style="display: block;">

                            <table id="table_id" class="table table-bordered table-sm table-striped" >
        <thead>
            <th><center>Nro</center></th>
            <th>Nombres</th>
            <th>Ci/Sis</th>
            <th>Placa</th>
            <th>Nro. Espacio</th>
            <th>Nro. Parqueó</th>
            <th>Total</th>            
            <th>Fecha vencimiento</th>
            <th>Estado</th>
            <th><center>Accion</center></th>
        </thead>

        <tbody>
                <?php
                $contador = 0;
                $query_cobros = $pdo->prepare("SELECT * FROM tb_registros WHERE estado = '1'");
                $query_cobros->execute();
                $cobros = $query_cobros->fetchAll(PDO::FETCH_ASSOC);
                foreach ($cobros as $cobro){
                    $id_registro = $cobro ['id_registro'];
                    $nombre_cliente = $cobro['nombre_cliente'];
                    $nit_ci = $cobro['nit_ci'];
                    $placa = $cobro['placa'];
                    $nro_espacio = $cobro['nro_espacio'];
                    $parqueo_nro = $cobro['parqueo_nro'];
                    $cuota = $cobro['cuota'];
                    $primer_cobro = $cobro['primer_cobro'];
                    $estado_cobro = $cobro['estado_cobro'];
                    $contador = $contador + 1;

                    if($cuota == "0"){
                        $color = "green";
                        $estado_cobro = "Al dia";
                    }else{
                        $color = "red";
                        $estado_cobro = "En mora";
                    };
          ?>
                    <tr>
                    <td><center><?php echo $contador;?></center></td>
                    <td><?php echo $nombre_cliente;?></td>
                    <td><?php echo $nit_ci;?></td>
                    <td><?php echo $placa;?></td>
                    <td><center><?php echo $nro_espacio;?></center></td>
                    <td><center><?php echo $parqueo_nro;?></center></td>
                    <td><?php echo $cuota. " Bs";?></td>
                    <td><?php echo $primer_cobro;?></td>                    
                    <td style="color: <?php echo $color;?>"><b><?php echo $estado_cobro;?></b></td>
                    <td>
                      <center>
                      <a href="realizar_cobro.php?id=<?php echo $id_registro;?>" class="btn btn-success">Realizar cobro</a>                      
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

