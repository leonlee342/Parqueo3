<?php

include('app/config.php');
include('layout/admin/datos_usuario_sesion.php');

    ?>
   <!DOCTYPE html>
   <html lang="es">
    <head>
        <?php  include('layout/admin/head.php');?>
    </head>
   <body class="hold-transition sidebar-mini">
 
    <div class="wrapper">
   <!-- MESta parte esta en menu.php-->
    <?php  include('layout/admin/menu.php');?>

            <div class="content-wrapper" >
    <!-- ******************************************************** -->
                <center><h2> PERFIL DEL USUARIO </h2></center>
                <div class="container">

                    <?php 
                        $id_get = $_GET['id'];
                        $query_clientes = $pdo->prepare("SELECT * FROM tb_clientes WHERE id = '$id_get' and estado = '1'");
                        $query_clientes->execute();
                        $clientes = $query_clientes->fetchAll(PDO::FETCH_ASSOC);
                            foreach($clientes as $cliente){
                            $id_docente = $cliente['id'];
                            $sis_docente = $cliente['sis_docente']; 
                            $nombres = $cliente['nombres'];   
                            $email = $cliente['email'];   
                            $telefono = $cliente['telefono'];   
                          }
                          //echo $id_get." - ".$nombres;
                    ?>

                    <div class="row">
                        <div class="col-md-11 offset-md-1">

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Usuario</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contraseña</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Solicitar Sitio</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Añadir vehiculo</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="true">Sitio Compartido</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="true">Realizar Reclamo</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile6" role="tab" aria-controls="profile" aria-selected="true">Mensajes</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile7" role="tab" aria-controls="profile" aria-selected="true">Avisos</a>
                                </li>
                                
                            </ul>
                            
                            <div class="tab-content" id="myTabContent">
                                <br>
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                   
                                    <div class="col-4">
                                        <img class="img-thumbnail" src="public/imagenes/usuario-perfil.png" alt="">
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group row">
                                            <label for="codigo" class="col-2">Cod. SIS:</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control" value="<?php echo $sis_docente;?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="usuario" class="col-2">Usuario:</label>
                                            <div class="col-8">
                                                <input type="text" class="form-control" value="<?php echo $nombres;?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-2">Email:</label>
                                            <div class="col-8">
                                                <input type="email" class="form-control" value="<?php echo $email;?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-2">Nro de sitio:</label>
                                            <div class="col-8">
                                                <input type="email" class="form-control" value="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                               <div class="col-md-6 offset-md-3">
                                    <h3 class="text-center">Cambio de clave</h3>
                                    <div class="form-group row">
                                        <label for="Usuario" class="col-4">Usuario:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" value="<?php echo $email;?>" disabled>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="contrasenia" class="col-4">Nueva Contraseña:</label>
                                        <div class="col-8">
                                            <input type="password" class="form-control" id="nuevo_password">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="ncontrasenia" class="col-4">Confirmar contraseña:</label>
                                        <div class="col-8">
                                            <input type="password" class="form-control" id="confirmar_password">
                                        </div>

                                    </div>
                                   
                                        <div class="form-group text-center">
                                            <button class="btn btn-info" id="btn_cambiar_password">Actualizar</button>
                                            <button class="btn btn-danger">Cancelar</button>
                                        </div>
                                  
                               </div>
                            </div>

                                <!-- SCRIPT CONTRASEÑA -->
                                <script>
                                    $('#btn_cambiar_password').click(function(){
                                        var sis_docente = <?php echo $sis_docente; ?> 
                                        var nuevo_password = $('#nuevo_password').val();
                                        var confirmar_password = $('#confirmar_password').val();                           
                                    
                                        if(nuevo_password==""){
                                            alert("Debe de llenar el campo Nueva Contraseña");
                                            $('#nuevo_password').focus();
                                        }else if(confirmar_password == ""){
                                            alert("Debe de llenar el campo Confirmar Contraseña");
                                            $('#confirmar_password').focus();
                                        }else if(nuevo_password == confirmar_password){
                                            //alert ('CONTRASEÑA ACTUALIZADA CORRECTAMENTE');
                                         
                                            Swal.fire({
                                                        position: 'top-center',
                                                        icon: 'success',
                                                        title: 'La contraseña fue cambiada exitosamente',
                                                        showConfirmButton: false,
                                                        timer: 2000
                                                        })

                                                $('#resultado').html(respuesta);
                                                $('#nuevo_password').val('');
                                                $('#confirmar_password').val('');                                            

                                        }else{   
                                               
                                                //alert ('LAS CONTRASEÑAS NO SON IGUALES');
                                                Swal.fire({
                                                    title: 'Error!',
                                                    text: 'Las contraseñas no son iguales',
                                                    icon: 'error',
                                                    confirmButtonText: 'Cerrar'                                                    
                                                    })

                                                $('#resultado').html(respuesta);
                                                $('#nuevo_password').val('');
                                                $('#confirmar_password').val('');
                                                              
                                        }
                        
                                    });
                                </script>
                                <!-- SCRIPT CONTRASEÑA  -->

                            <!-- **** -->
                            <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
                               <div class="col-md-6 offset-md-3">
                                    <h3 class="text-center">Solicitar Sitio </h3>
                                    <div class="form-group row">
                                        <label for="Usuario" class="col-4">Usuario:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" value="<?php echo $email;?>" disabled>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="contrasenia" class="col-4">Placa:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="placa_enviar">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="ncontrasenia" class="col-4">Marca:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="marca_enviar">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="ncontrasenia" class="col-4">Modelo:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="modelo_enviar">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="ncontrasenia" class="col-4">Color:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="color_enviar">
                                        </div>

                                    </div>
                                   
                                        <div class="form-group text-center">
                                            <button class="btn btn-info" id="btn_solicitar_lugar">Enviar</button>
                                            <button class="btn btn-danger">Cancelar</button>
                                        </div>

                                        <!-- ****                                        -->
                               </div>
                                                <div id="respuesta_solicitar_vehiculo">

                                                </div> 
                            </div>

                          <!-- SCRIT SOLICITAR SITIO -->
                          <script>
                            $('#btn_solicitar_lugar').click(function(){
                                var sis_docente = <?php echo $sis_docente; ?> 
                                var placa_enviar = $('#placa_enviar').val();
                                var marca_enviar = $('#marca_enviar').val();
                                var modelo_enviar = $('#modelo_enviar').val();
                                var color_enviar = $('#color_enviar').val();
                            
                                if(placa_enviar==""){
                                    alert("Debe de llenar el campo Placa");
                                    $('#placa_enviar').focus();
                                }else if(marca_enviar == ""){
                                    alert("Debe de llenar el campo Marca");
                                    $('#marca_enviar').focus();
                                }else if(modelo_enviar == ""){
                                    alert("Debe de llenar el campo Modelo");
                                    $('#modelo_enviar').focus();
                                    }else  if(color_enviar == ""){
                                    alert("Debe de llenar el campo Color");
                                    $('#color_enviar').focus();
                                    }else
                                    {     // Esta es la parte que esta llamando al controlador de ajax; se puedeenviar por post o get
                                        var url = 'solicitudes/controller_solitar_vehiculo.php';
                                        $.get(url, {sis_docente:sis_docente, placa_enviar:placa_enviar ,marca_enviar:marca_enviar, modelo_enviar:modelo_enviar, color_enviar:color_enviar}, function(datos){
                                        $('#respuesta_solicitar_vehiculo').html(datos);
                                    });
                                }
                   
                            });
                         </script>

                          <!-- SCRIT SOLICITAR SITIO -->



           <!-- **** -->
           <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab">

            <!-- *INGRESAR VEHICULO** -->              
            <div class="col-md-8">

                <div class="card card-danger" style="border: 1px solid #777777">
                  <div class="card-header" style="background-color: #007bff; color: #ffffff">
                      <h3 class="card-title">Ingresar Nuevo Vehiculo</h3>
                      <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                              </button>
                          </div>
                      <!-- esta es la parte del menu que miniza la ventana se puede borrar -->
                  </div>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="">Placa:</label>
                              <input type="text" class="form-control" id="placa" >
                          </div>
                          <div class="form-group">
                            <label for="">Marca:</label>
                            <input type="text" class="form-control" id="marca" >
                          </div>
                          <div class="form-group">
                             <label for="">Modelo:</label>
                             <input type="email" class="form-control" id="modelo" >
                          </div>
                          <div class="form-group">
                            <label for="">Color:</label>
                            <input type="text" class="form-control" id="color" >
                          </div>
                          <div class="form-group">
                            <button class="btn btn-success" id="btn_guardar">Añadir Auto</button>
                            <a href="#" class="btn btn-default">Cancelar</a>
                          </div>
                                    <div id="respuesta">

                                    </div> 
                        </div>
                </div>
            </div>
****    

                <div class="col-md-12">
                    <div class="col-md-12">
                    <br>
                            <h2>Listado de vehiculos </h2>
                            <table class="table table-bordered table-sm table-striped">
                            <th><center>Nro</center></th>
                            <th>Placa</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Color</th>
                            <th><center>Acción</center></th>
                
                                <?php 
                                $contador = 0; 
                                $query_usuario = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE estado = '1' AND sis_docente = '$sis_docente' ");
                                $query_usuario->execute();
                                $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
                                foreach($usuarios as $usuario){
                                    $id = $usuario['id'];
                                    $placa = $usuario['placa'];
                                    $marca = $usuario['marca'];
                                    $modelo = $usuario['modelo'];
                                    $color = $usuario['color'];
                                    $contador = $contador + 1; 
                                    ?> 
                                    <tr>
                                    <td><center><?php echo $contador;?></center></td> 
                                    <td><center><?php echo $placa;?></center></td>
                                    <td><center><?php echo $marca;?></center></td>
                                    <td><?php echo $modelo;?></td>
                                    <td><?php echo $color;?></td>                                            
                                    <td> 
                                        <center>
                                        <a href="#" class="btn btn-success">Editar</a>
                                        <a href="#" class="btn btn-danger">Borrar</a>
                                        </center>
                                    </td>
                                    </tr>

                            <?php                    
                            } 
                            ?> 

                            </table>
                    </div>
                </div>


****

<!-- ***FIN INGRESAR VEHICULO* -->
         </div>

<!-- ******compartido -->
                        <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab">
                               <div class="col-md-8 offset-md-3">
                                    <h3 class="text-center">Solicitar Sitio Compartido</h3><br>
                                    <div class="form-group row">
                                        <label for="Usuario" class="col-4">Nombre Usuario:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="usuario_compatido" value="" >
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="contrasenia" class="col-4">Placa:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="placa_compartido">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="ncontrasenia" class="col-4">Fecha:</label>
                                        <div class="col-8">
                                                <?php  
                                                    date_default_timezone_set("America/Caracas");
                                                      $fechaHora = date("Y-m-d h:i:s");
                                                      $dia = date('d');
                                                      $mes = date('m');
                                                      $ano = date('Y');
                                                ?>
                                            <input type="date" class="form-control" id="fecha_compartido" value="<?php echo $ano."-".$mes."-".$dia; ?>">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="ncontrasenia" class="col-4">Hora Inicio:</label>
                                        <div class="col-8">
                                                <?php  
                                                    date_default_timezone_set("America/Caracas");
                                                    $fechaHora = date("Y-m-d h:i:s");
                                                    $hora = date('H');
                                                    $minutos = date('i');
                                                ?>
                                            <input type="time" class="form-control" id="hora_inicio" value="<?php echo $hora.":".$minutos; ?>">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="ncontrasenia" class="col-4">Hora Final:</label>
                                        <div class="col-8">
                                            <input type="time" class="form-control" id="hora_final" value="<?php echo $hora.":".$minutos; ?>">
                                        </div>

                                    </div>
                                   
                                        <div class="form-group text-center">
                                            <button class="btn btn-info" id="btn_compartido">Enviar</button>
                                            <button class="btn btn-danger">Cancelar</button>
                                        </div>

                                        <!-- ****                                        -->
                               </div>
                                                <div id="respuesta_compartido">

                                                </div> 
                        </div>

                          <!-- SCRIT SOLICITAR SITIO  -->
                          <script>
                            $('#btn_compartido').click(function(){
                                var sis_docente = <?php echo $sis_docente; ?>                                                     
                                var usuario_compatido = $('#usuario_compatido').val();
                                var placa_compartido = $('#placa_compartido').val();
                                var fecha_compartido = $('#fecha_compartido').val();
                                var hora_inicio = $('#hora_inicio').val();
                                var hora_final = $('#hora_final').val();
                            
                                if(usuario_compatido==""){
                                    alert("Debe de llenar el campo Nombre usuario");
                                    $('#usuario_compatido').focus();
                                }else if(placa_compartido == ""){
                                    alert("Debe de llenar el campo Placa");
                                    $('#placa_compartido').focus();
                                }else{    
                                    var url = 'solicitudes/controller_sitio_compartido.php';
                                        $.get(url, {sis_docente:sis_docente, usuario_compatido:usuario_compatido ,placa_compartido:placa_compartido, fecha_compartido:fecha_compartido, hora_inicio:hora_inicio, hora_final:hora_final}, function(datos){
                                        $('#respuesta_compartido').html(datos);

                                        $('#resultado').html(respuesta);
                                        $('#usuario_compatido').val('');
                                        $('#placa_compartido').val('');

                                    });
                                }        
                            });
                         </script>

                          <!-- SCRIT SOLICITAR SITIO -->
                        
<!-- ******compartido -->



<!-- ********Reclamo -->
                        <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab">
                               <div class="col-md-10 offset-md-3">
                                    <h3 class="text-center">Realizar Reclamo</h3>

                                    <div class="card card-outline card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Llene todos los campos</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>

                                    </div>

                                    <div class="card-body" style="display: block;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form group">
                                                    <label>Asunto:</label>
                                                    <input type="text" id="asunto_reclamo" class="form-control">
                                                </div>
                                            </div>


                                    </div>
                                    </div>

                                    <div class="card-body" style="display: block;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form group">
                                                    <label>Redactar reclamo:</label>
                                                    <textarea name="" id="redactar_reclamo" cols="60" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>                         
                                    </div>
                                    </div>                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="" class="btn btn-default btn-block">Cancelar</a>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary btn-block" id="btn_enviar_reclamo">
                                                Enviar
                                            </button>
                                        </div>
                                    </div>

                                            <div id="respuesta_reclamo">

                                            </div>

                                </div>                                                    
                               </div>
                        </div>

                         <!-- SCRIT REALIZAR RECLAMO  -->
                        <script>
                            $('#btn_enviar_reclamo').click(function(){
                                var sis_docente = <?php echo $sis_docente; ?>                                                     
                                var asunto_reclamo = $('#asunto_reclamo').val();
                                var redactar_reclamo = $('#redactar_reclamo').val();                     
                            
                                if(asunto_reclamo==""){
                                    alert("Debe de llenar el campo Asunto");
                                    $('#asunto_reclamo').focus();
                                }else if(redactar_reclamo == ""){
                                    alert("Debe de llenar el campo Redactar reclamo");
                                    $('#redactar_reclamo').focus();
                                }else{    
                                    var url = 'solicitudes/controller_realizar_reclamo.php';
                                        $.get(url, {sis_docente:sis_docente, asunto_reclamo:asunto_reclamo ,redactar_reclamo:redactar_reclamo}, function(datos){
                                        $('#respuesta_reclamo').html(datos);

                                        $('#resultado').html(respuesta);
                                        $('#asunto_reclamo').val('');
                                        $('#redactar_reclamo').val('');

                                    });
                                } 
                            });
                         </script>

<!-- ****RECLAMO -->

<!-- ********MENSAJES -->
<div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile-tab">
                               <div class="col-md-10 offset-md-3">
                                    <h3 class="text-center">Revizar Mensajes</h3>

                                    <div class="card card-outline card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Mensajes Globales e individuales</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>

                                    </div>

                                    <div class="card-body" style="display: block;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form group">
                                                    <label>Asunto:</label>
                                                    <input type="text" id="asunto_reclamo" class="form-control">
                                                </div>
                                            </div>


                                    </div>
                                    </div>

                                    <div class="card-body" style="display: block;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form group">
                                                    <label>Redactar reclamo:</label>
                                                    <textarea name="" id="redactar_reclamo" cols="60" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>                         
                                    </div>
                                    </div>                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="" class="btn btn-default btn-block">Cancelar</a>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary btn-block" id="btn_enviar_reclamo">
                                                Enviar
                                            </button>
                                        </div>
                                    </div>

                                            <div id="respuesta_reclamo">

                                            </div>

                                </div>                                                    
                               </div>
                        </div>

                         <!-- SCRIT REALIZAR RECLAMO  -->
                        <script>
                            $('##').click(function(){
                                var sis_docente = <?php echo $sis_docente; ?>                                                     
                                var asunto_reclamo = $('#asunto_reclamo').val();
                                var redactar_reclamo = $('#redactar_reclamo').val();                     
                            
                                if(asunto_reclamo==""){
                                    alert("Debe de llenar el campo Asunto");
                                    $('#asunto_reclamo').focus();
                                }else if(redactar_reclamo == ""){
                                    alert("Debe de llenar el campo Redactar reclamo");
                                    $('#redactar_reclamo').focus();
                                }else{    
                                    var url = 'solicitudes/controller_realizar_reclamo.php';
                                        $.get(url, {sis_docente:sis_docente, asunto_reclamo:asunto_reclamo ,redactar_reclamo:redactar_reclamo}, function(datos){
                                        $('#respuesta_reclamo').html(datos);

                                        $('#resultado').html(respuesta);
                                        $('#asunto_reclamo').val('');
                                        $('#redactar_reclamo').val('');

                                    });
                                } 
                            });
                         </script>

<!-- ****MENSAJES -->

<!-- ********AVISOS -->
<div class="tab-pane fade" id="profile7" role="tabpanel" aria-labelledby="profile-tab">
                               <div class="col-md-10 offset-md-3">
                                    <h3 class="text-center">Avisos Parqueo-FCYT</h3>

                                    <div class="card card-outline card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Avisos del parqueo</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>

                                    </div>

                                    <div class="card-body" style="display: block;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form group">
                                                    <label>Asunto:</label>
                                                    <input type="text" id="asunto_reclamo" class="form-control">
                                                </div>
                                            </div>


                                    </div>
                                    </div>

                                    <div class="card-body" style="display: block;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form group">
                                                    <label>Redactar reclamo:</label>
                                                    <textarea name="" id="redactar_reclamo" cols="60" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>                         
                                    </div>
                                    </div>                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="" class="btn btn-default btn-block">Cancelar</a>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary btn-block" id="btn_enviar_reclamo">
                                                Enviar
                                            </button>
                                        </div>
                                    </div>

                                            <div id="respuesta_reclamo">

                                            </div>

                                </div>                                                    
                               </div>
                        </div>

                         <!-- SCRIT REALIZAR RECLAMO  -->
                        <script>
                            $('##').click(function(){
                                var sis_docente = <?php echo $sis_docente; ?>                                                     
                                var asunto_reclamo = $('#asunto_reclamo').val();
                                var redactar_reclamo = $('#redactar_reclamo').val();                     
                            
                                if(asunto_reclamo==""){
                                    alert("Debe de llenar el campo Asunto");
                                    $('#asunto_reclamo').focus();
                                }else if(redactar_reclamo == ""){
                                    alert("Debe de llenar el campo Redactar reclamo");
                                    $('#redactar_reclamo').focus();
                                }else{    
                                    var url = 'solicitudes/controller_realizar_reclamo.php';
                                        $.get(url, {sis_docente:sis_docente, asunto_reclamo:asunto_reclamo ,redactar_reclamo:redactar_reclamo}, function(datos){
                                        $('#respuesta_reclamo').html(datos);

                                        $('#resultado').html(respuesta);
                                        $('#asunto_reclamo').val('');
                                        $('#redactar_reclamo').val('');

                                    });
                                } 
                            });
                         </script>

<!-- ****AVISOS -->




           <!-- **** -->
                            
                            </div>

                        </div>

                    </div>

                </div>
        <!-- ******************************************************** -->
            </div>

<?php  include('layout/admin/footer.php');?>
    </div>
<?php  include('layout/admin/footer_link.php');?>
    </body>
    </html>   
    
<script>
    $('#btn_guardar').click(function(){

      var sis_docente = <?php echo $sis_docente; ?> 
      var placa = $('#placa').val();
      var marca = $('#marca').val();
      var modelo = $('#modelo').val();
      var color = $('#color').val();
s      
      if(placa==""){
        alert("Debe de llenar el campo Placa");
        $('#placa').focus();
      }else if(marca == ""){
        alert("Debe de llenar el campo Marca");
        $('#marca').focus();
      }else if(modelo == ""){
        alert("Debe de llenar el campo Modelo");
        $('#modelo').focus();
        }else  if(color == ""){
        alert("Debe de llenar el campo Color");
        $('#color').focus();
        }else
        {     // Esta es la parte que esta llamando al controlador de ajax; se puedeenviar por post o get
              var url = 'clientes/controller_create_vehiculo.php';
              $.get(url, {sis_docente:sis_docente, placa:placa ,marca:marca, modelo:modelo, color:color}, function(datos){
              $('#respuesta').html(datos);
        });
      }
    });
</script>

