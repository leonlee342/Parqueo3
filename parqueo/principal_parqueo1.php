<?php
include('../app/config.php');
include('../layout/admin/datos_usuario_sesion.php');

      //echo "existe sesion";
?>    

<!-- Iniiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiicio Html -->
<!DOCTYPE html>
  <html lang="es">
    <head>
        <?php include('../layout/admin/head.php'); ?>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- nabvar inicio -->
            <?php include('../layout/admin/menu.php'); ?>
            <!-- nabvar final -->
    
            <!-- Content Wrapper. Contains page content -->

    <!-- ********INICIO***** -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <div class="container">
            <br>
            <h2>Bienvenido al parqueo Nro. 1 - FCYT</h2>
            <br>

            <div class="row">
                <div class="col-md-12">
                     <!-- INICIO TARJETA -->
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Mapeo actual del parqueo Nro. 1</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">

                                <?php 
                                    $query_mapeos = $pdo->prepare("SELECT * FROM tb_mapeos WHERE estado = '1'");
                                    $query_mapeos->execute();
                                    $mapeos = $query_mapeos->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($mapeos as $mapeo){
                                        $id_map = $mapeo ['id_map'];
                                        $nro_espacio = $mapeo['nro_espacio'];
                                        $estado_espacio = $mapeo['estado_espacio'];

                                        // ***************************************************************************
                                        if($estado_espacio == "DISPONIBLE"){?>
                                            <div class="col">
                                                <center>
                                                    <h2><?php echo $nro_espacio;?></h2>  
                                                    <button class="btn btn-warning" style="width: 100%; height: 114px"
                                                             data-toggle="modal" data-target="#modal<?php echo $id_map;?>">
                                                    <p style="font-size: 11px"><?php echo $estado_espacio;?></p>
                                                    </button>                                                                                                 

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal<?php echo $id_map;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">ASIGNACIÓN DEL ESPACIO DEL PARQUEO</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                            
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Placa:</label>
                                                                    <div class="col-sm-7">
                                                                    <input type="text" class="form-control" id="placa_asignar<?php echo $id_map;?>">
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                    <button class="btn btn-primary" id="btn_buscar_cliente_asignar<?php echo $id_map;?>" type="button">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                                        </svg>
                                                                        Buscar
                                                                    </button>

                                                                        <script>
                                                                            $('#btn_buscar_cliente_asignar<?php echo $id_map;?>').click(function(){
                                                                            var placa_asignar = $('#placa_asignar<?php echo $id_map;?>').val();
                                                                            var id_map = "<?php echo $id_map;?>";

                                                                            if(placa_asignar == ""){
                                                                                alert ("Debe llenar el campo placa");
                                                                                $('#placa_asignar<?php echo $id_map;?>').focus();                                                                
                                                                            }else{
                                                                                var url = '../docentes/controller_buscar_asignar_docente.php';
                                                                                $.get(url, {placa_asignar:placa_asignar, id_map:id_map}, function(datos){
                                                                                $('#respuesta_asignar_cliente<?php echo $id_map;?>').html(datos);
                                                                                });
                                                                                }
                                                                            
                                                                             });
                                                                        </script>         
                                                                    </div>
                                                                </div>
                                                                        <div id="respuesta_asignar_cliente<?php echo $id_map;?>">

                                                                        </div>                

                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">Fecha de ingreso:</label>
                                                                    <div class="col-sm-8">
                                                                    <input type="date" class="form-control" id="fecha_ingreso<?php echo $id_map;?>" value="<?php echo $ano."-".$mes."-".$dia;?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">Hora de ingreso:</label>
                                                                    <div class="col-sm-8">
                                                                    <input type="time" class="form-control" id="hora_ingreso<?php echo $id_map;?>" value="<?php echo $hora.":".$minutos; ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">Nro de espacio:</label>
                                                                    <div class="col-sm-8">
                                                                    <input type="text" class="form-control" id="cuviculo<?php echo $id_map;?>" value="<?php echo $nro_espacio; ?>">
                                                                    </div>
                                                                </div>

                                                            </form>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            <button type="button" class="btn btn-primary" id="btn_asignar_sitio<?php echo $id_map;?>" disabled>Asignar Sitio</button >
                                                                <script>
                                                                     $('#btn_asignar_sitio<?php echo $id_map;?>').click(function(){
                                                                        var placa = $('#placa_asignar<?php echo $id_map;?>').val();
                                                                        var nombre_cliente = $('#nombre_cliente<?php echo $id_map;?>').val();
                                                                        var nit_ci = $('#nit_ci<?php echo $id_map;?>').val();
                                                                        var fecha_ingreso = $('#fecha_ingreso<?php echo $id_map;?>').val();
                                                                        var hora_ingreso = $('#hora_ingreso<?php echo $id_map;?>').val();
                                                                        var cuviculo = $('#cuviculo<?php echo $id_map;?>').val();
                                                                        var user_session = "<?php echo $usuario_sesion ?>"
                                                                        if(placa == ""){
                                                                            alert ('Debe de llenar el campo placa');
                                                                            $('#placa_buscar<?php echo $id_map;?>').focus();                                                                      
                                                                            }else{
                                                                               //alert ('listo');
                                                                                var url_1 = 'controller_cambiar_estado_dis_libre.php';
                                                                                $.get(url_1, {cuviculo:cuviculo,placa:placa}, function(datos){
                                                                                $('#respuesta_asignar_cliente<?php echo $id_map;?>').html(datos);
                                                                                }); 

                                                                                //REGISTRAR CLIENTES QUE PASAN DE ESTADO DIPONIBLE PARA COBRO
                                                                                 var url_2 = 'controller_registrar_disponible.php';
                                                                                $.get(url_2, {placa:placa,nombre_cliente:nombre_cliente,cuviculo:cuviculo,nit_ci:nit_ci}, function(datos){
                                                                                $('#respuesta_asignar_cliente<?php echo $id_map;?>').html(datos);
                                                                                }); 

                                                                                 //ENVIA AL CONTROLADOR LOS DATOS PARA INICIAR PERIODO DE COBRO
                                /*                                                 var url_3 = 'controller_crear_periodo_cobro.php';
                                                                                $.get(url_3, {placa:placa,nit_ci:nit_ci,fecha_ingreso:fecha_ingreso,cuviculo:cuviculo}, function(datos){
                                                                                $('#respuesta_asignar_cliente<?php echo $id_map;?>').html(datos);
                                                                                });  */

                                                                            }
                                                                        });

                                                                </script>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                
                                                </center>
                                            </div>
                                        <?php
                                        }
                                        // ***************************************************************************
                                        if($estado_espacio == "LIBRE"){?>
                                            <div class="col">
                                                                <?php
                                                                      $query_placas = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE estado = '1' AND nro_espacio = '$id_map'");
                                                                      $query_placas->execute();
                                                                      $placas = $query_placas->fetchAll(PDO::FETCH_ASSOC);
                                                                          foreach($placas as $placa){
                                                                              $placa = $placa['placa'];                                                                              
                                                                    }
                                                                ?>
                                                <center>
                                                    <h2><?php echo $nro_espacio;?></h2>  
                                                    <button class="btn btn-success" style="width: 100%; height: 114px"
                                                             data-toggle="modal" data-target="#modal<?php echo $id_map;?>">
                                                    <p><?php echo $estado_espacio;?></p>
                                                    </button>  

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal<?php echo $id_map;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                    
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">INGRESO DEL VEHICULO</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                         
                                                        </div>
                                                        <div class="modal-body">                                                   

                                                            <form>
                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">Placa:</label>


                                                                    <div class="col-sm-6">
                                                                         <input type="text" value ="<?php echo $placa;?>" class="form-control" id="placa_buscar<?php echo $id_map;?>" disabled>                                                     
                                                                    </div>

                                                                    <div class="col-sm-3">
                                                                    <button class="btn btn-primary" id="btn_buscar_cliente<?php echo $id_map;?>" type="button">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                                        </svg>
                                                                        Buscar
                                                                    </button>
                                                                     
                                                                        <script>
                                                                            $('#btn_buscar_cliente<?php echo $id_map;?>').click(function(){
                                                                            var placa = $('#placa_buscar<?php echo $id_map;?>').val();
                                                                            var id_map = "<?php echo $id_map;?>";

                                                                            if(placa == ""){
                                                                                alert ("Debe llenar el campo placa");
                                                                                $('#placa_buscar<?php echo $id_map;?>').focus();                                                                
                                                                            }else{
                                                                                var url = '../docentes/controller_buscar_cliente.php';
                                                                                $.get(url, {placa:placa, id_map:id_map}, function(datos){
                                                                                $('#respuesta_buscar_cliente<?php echo $id_map;?>').html(datos);
                                                                                });
                                                                                }
                                                                            
                                                                             });
                                                                        </script>    

                                                                    </div>
                                                                </div>
                                                                    <div id="respuesta_buscar_cliente<?php echo $id_map;?>">

                                                                    </div>

                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">Fecha de ingreso:</label>
                                                                    <div class="col-sm-8">

                                                                        <?php
                                                                            date_default_timezone_set("America/Caracas");
                                                                            $fechaHora = date("Y-m-d h:i:s");
                                                                            $dia = date('d');
                                                                            $mes = date('m');
                                                                            $ano = date('Y');
                                                                        ?>

                                                                    <input type="date" class="form-control" id="fecha_ingreso<?php echo $id_map;?>" value="<?php echo $ano."-".$mes."-".$dia;?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">Hora de ingreso:</label>
                                                                    <div class="col-sm-8">

                                                                        <?php
                                                                            date_default_timezone_set("America/Caracas");
                                                                            $fechaHora = date("Y-m-d h:i:s");
                                                                            $hora = date('H');
                                                                            $minutos = date('i');                                                                            
                                                                        ?>

                                                                    <input type="time" class="form-control" id="hora_ingreso<?php echo $id_map;?>" value="<?php echo $hora.":".$minutos; ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">Nro de espacio:</label>
                                                                    <div class="col-sm-8">
                                                                    <input type="text" class="form-control" id="cuviculo<?php echo $id_map;?>" value="<?php echo $nro_espacio; ?>">
                                                                    </div>
                                                                </div> 
    

                                                            </form>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>                                                            
                                                            <!-- <a href="controller_cambiar_libre_a_disponible.php?id=<?php echo $id_map;?>" class="btn btn-success">Cambiar a disponible</a> -->
                                                            <button type="button" class="btn btn-primary" id="btn_registrar_ticket<?php echo $id_map;?>" disabled>Registrar Ingreso</button>

                                                                <script>
                                                                     $('#btn_registrar_ticket<?php echo $id_map;?>').click(function(){
                                                                        var placa = $('#placa_buscar<?php echo $id_map;?>').val();
                                                                        var nombre_cliente = $('#nombre_cliente<?php echo $id_map;?>').val();
                                                                        var nit_ci = $('#sis_docente<?php echo $id_map;?>').val();
                                                                        var fecha_ingreso = $('#fecha_ingreso<?php echo $id_map;?>').val();
                                                                        var hora_ingreso = $('#hora_ingreso<?php echo $id_map;?>').val();
                                                                        var cuviculo = $('#cuviculo<?php echo $id_map;?>').val();
                                                                        var user_sesion = "<?php echo $usuario_sesion ?>"
                                                                        var parqueo_nro = "1";

                                                                            // if(placa == ""){
                                                                            // alert ('Debe de llenar el campo placa');
                                                                            // $('#placa_buscar<?php echo $id_map;?>').focus();
                                                                            // }else if(nombre_cliente == ""){
                                                                            // alert ('Debe de llenar el campo nombre del cliente');
                                                                            // $('#nombre_cliente<?php echo $id_map;?>').focus();
                                                                            // }else if(nit_ci == ""){
                                                                            // alert ('Debe de llenar el campo nit/ci');
                                                                            // $('#nit_ci<?php echo $id_map;?>').focus();
                                                                            // }else{                                                                                
                                                                            //alert ('kkkk');

                                                                                //CAMBIA AL ESTADO OCUPADO
                                                                            var url_1 = 'controller_cambiar_estado_ocupado.php';
                                                                                $.get(url_1, {cuviculo:cuviculo}, function(datos){
                                                                                $('#respuesta_ticket<?php echo $id_map;?>').html(datos);
                                                                                });
                                                                                                                                                                  
                                                                            //REGISTRA TICKET EN LA TABLA TICKET
                                                                            var url_2 = '../tickets/controller_registrar_ticket.php';
                                                                                $.get(url_2, {placa:placa, nombre_cliente:nombre_cliente, nit_ci:nit_ci,fecha_ingreso:fecha_ingreso, hora_ingreso:hora_ingreso, cuviculo:cuviculo, user_sesion:user_sesion, parqueo_nro:parqueo_nro}, function(datos){
                                                                                $('#respuesta_ticket<?php echo $id_map;?>').html(datos);
                                                                                });    
                                                                       
                                                                            // }
                                                                         });
                                                                </script>
                                                                       
                                                        </div>

                                                                    <div id="respuesta_ticket<?php echo $id_map;?>">

                                                                    </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                   
                                                </center>
                                            </div>
                                        <?php
                                        }
                                    // *********************FIN FOREACH******************************************************
                                        if($estado_espacio == "OCUPADO"){?>
                                            <div class="col">
                                                <center>
                                                    <h2><?php echo $nro_espacio;?></h2>
                                                        <button class="btn btn-info" id="btn_ocupado<?php echo $id_map;?>" data-toggle="modal" 
                                                                data-target="#exampleModa<?php echo $id_map;?>">
                                                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="60px" class="">
                                                        </button>     
                                                        
                                                        <?php

                                                        $query_datos_cliente = $pdo->prepare("SELECT * FROM tb_tickets WHERE cuviculo= '$nro_espacio' AND estado = '1'");
                                                        $query_datos_cliente->execute();
                                                        $datos_clientes = $query_datos_cliente->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach ($datos_clientes as $datos_cliente){
                                                            $id_ticket = $datos_cliente['id_ticket'];
                                                            $placa_auto = $datos_cliente['placa_auto'];
                                                            $nombre_cliente = $datos_cliente['nombre_cliente'];
                                                            $nit_ci = $datos_cliente['nit_ci'];
                                                            $cuviculo = $datos_cliente['cuviculo'];
                                                            $fecha_ingreso = $datos_cliente['fecha_ingreso'];
                                                            $hora_ingreso = $datos_cliente['hora_ingreso'];
                                                            $user_sesion = $datos_cliente['user_sesion'];
                                                        }
                                                        ?>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModa<?php echo $id_map;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Datos del cliente</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">Placa:</label>
                                                                    <div class="col-sm-8">
                                                                         <input type="text" class="form-control" value="<?php echo $placa_auto;?>" id="placa_buscar<?php echo $id_map;?>" disabled>
                                                                    </div>                                                                    
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">Nombre:</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" value="<?php echo $nombre_cliente;?>" id="nombre_cliente<?php echo $id_map;?>" disabled>
                                                                        </div>
                                                                </div> 

                                                                <div class="form-group row">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">NIT/CI:</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" value="<?php echo $nit_ci;?>" id="nit_ci<?php echo $id_map;?>" disabled>
                                                                        </div>
                                                                </div>

                                                                    <div class="form-group row">
                                                                        <label for="staticEmail" class="col-sm-4 col-form-label">Fecha de ingreso:</label>
                                                                        <div class="col-sm-8">
                                                                        <input type="text" class="form-control" value="<?php echo $fecha_ingreso;?>" id="fecha_ingreso<?php echo $id_map;?>" disabled>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="staticEmail" class="col-sm-4 col-form-label">Hora de ingreso:</label>
                                                                        <div class="col-sm-8">
                                                                        <input type="text" class="form-control" value="<?php echo $hora_ingreso;?>" id="hora_ingreso<?php echo $id_map;?>" disabled>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="staticEmail" class="col-sm-4 col-form-label">Nro de espacio:</label>
                                                                        <div class="col-sm-8">
                                                                        <input type="text" class="form-control" value="<?php echo $cuviculo;?>" id="cuviculo<?php echo $id_map;?>" disabled>
                                                                        </div>
                                                                    </div> 


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>                                                                
                                                                <a href="../tickets/controller_cancelar_ticket.php?id=<?php echo $id_ticket;?>&&cuviculo=<?php echo $cuviculo;?>" class="btn btn-danger">Cancelar Entrada</a>
                                                                <a href="../tickets/reimprimir_ticket.php?id=<?php echo $id_ticket;?>" class="btn btn-primary">Volver a Imprimir</a>
                                                                <!-- <button type="button" class="btn btn-success">Facturar</button> -->
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        
                                                    <p><?php echo $estado_espacio;?></p>
                                                </center>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        }
                                ?>


                            </div>
                        </div>



                    </div>
                        <!-- FIN TARJETA -->
                            
                </div>
            </div>

        </div>
    </div>
  <!-- /.content-wrapper -->
****FIN*******               
            <!-- Main Footer -->
            <?php include('../layout/admin/footer.php'); ?>
            <!-- FINAL Main Footer -->
        </div>
            <!-- ./wrapper -->

            <?php include('../layout/admin/footer_link.php'); ?>
    </body>
  </html>
    <!-- Finnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn Html -->