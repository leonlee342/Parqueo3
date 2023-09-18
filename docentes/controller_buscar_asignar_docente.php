<?php

include('../app/config.php');

$placa  = $_GET['placa_asignar'];
$id_map  = $_GET['id_map'];

$placa = strtoupper($placa); // CONVIERTE TODO A MAYUSCULA DEL LADO DEL CONTROLADOR

//echo "placa".$placa;

$id_cliente = '';
$nombre_cliente = '';
$nit_ci_cliente = ''; 
$nro_espacio = ''; 

$query_buscars = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE estado = '1' AND placa = '$placa' ");
$query_buscars->execute();
$buscars = $query_buscars->fetchAll(PDO::FETCH_ASSOC);
foreach($buscars as $buscar){
    $id_cliente = $buscar['id'];
    $nombre_cliente = $buscar['nombres'];
    $nit_ci_cliente = $buscar['sis_docente'];                
    $nro_espacio = $buscar['nro_espacio'];   
}

if ($nombre_cliente == ""){
    //echo "EL CLIENTE NO EXISTE EN LA BASE DE DATOS";
    ?>
    <div class="alert alert-danger">
    EL CLIENTE NO EXISTE EN LA BASE DE DATOS
    </div>

        <script>
            $('#btn_asignar_sitio<?php echo $id_map;?>').attr('disabled','disabled');
        </script>
        
    <?php
}else if ($nro_espacio == ""){
        //echo "EL CLIENTE NO TIENE UN ESPACIO EN EL PARQUEO";

    ?>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-3 col-form-label">Nombre:<span><b style="color: red">*</b></span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nombre_cliente<?php echo $id_map;?>" value="<?php echo $nombre_cliente; ?>">
            </div>
    </div> 

    <div class="form-group row">
        <label for="staticEmail" class="col-sm-3 col-form-label">NIT/CI:<span><b style="color: red">*</b></span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nit_ci<?php echo $id_map;?>" value="<?php echo $nit_ci_cliente; ?>">
            </div>
    </div>

            <script>
                $('#btn_asignar_sitio<?php echo $id_map;?>').removeAttr('disabled');
            </script>

    <?php 



}else{
   // echo "EL CLIENTE YA TIENE UN ESPACIO EN EL PARQUEO";
   ?>
    <div class="alert alert-danger">
    EL CLIENTE YA TIENE UN ESPACIO EN EL PARQUEO
    </div>
    <script>
            $('#btn_asignar_sitio<?php echo $id_map;?>').attr('disabled','disabled');
    </script>
   <?php
}

 







