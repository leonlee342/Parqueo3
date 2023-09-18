<?php

include('../app/config.php');

$placa  = $_GET['placa'];
$id_map  = $_GET['id_map'];

$placa = strtoupper($placa); // CONVIERTE TODO A MAYUSCULA DEL LADO DEL CONTROLADOR

//echo "placa".$placa;

$id_cliente = '';
$nombre_cliente = '';
$sis_docente = ''; 
$contador_vehiculos = 0;

//BUSCA DATOS DEL DOCENTE DE LA TABLA VEHICULOS
$query_buscars = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE estado = '1' AND nro_espacio = '$id_map' ");
$query_buscars->execute();
$buscars = $query_buscars->fetchAll(PDO::FETCH_ASSOC);
foreach($buscars as $buscar){
    $id_cliente = $buscar['id'];
    $nombre_cliente = $buscar['nombres'];
    $sis_docente = $buscar['sis_docente']; 
    
}


//BUSCA DATOS DE MAS VEHICULOS DEL CLIENTE O ESPACIO COMPARTIDO TABLA VEHICULOS
$query_buscars2 = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE estado = '1' AND sis_docente = '$sis_docente' ");
$query_buscars2->execute();
$buscars2 = $query_buscars2->fetchAll(PDO::FETCH_ASSOC);
foreach($buscars2 as $buscars){
    $contador_vehiculos = $contador_vehiculos +1;
    
}

    if ($contador_vehiculos == "1"){
        //echo "SOLO HAY EL VEHICULO DEL TITULAR";        
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
                        <input type="text" class="form-control" id="sis_docente<?php echo $id_map;?>" value="<?php echo $sis_docente; ?>">
                    </div>
            </div>

            <script>
                $('#btn_registrar_ticket<?php echo $id_map;?>').removeAttr('disabled');
            </script>


        <?php
    }else{
        //echo "ESTE ESPACIO TIENE OTROS VEHICULOS";

        ?>

        <div class="form-group row">
        <label for="staticEmail" class="col-sm-3 col-form-label">Nombre:<span><b style="color: red">*</b></span></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nombre_cliente<?php echo $id_map;?>" value="<?php echo $nombre_cliente; ?>">
            </div>
         </div> 

         <div class="col-sm-9">
              <input type="text" class="form-control" id="sis_docente<?php echo $id_map;?>" value="<?php echo $sis_docente; ?>" hidden>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Vehiculos:<span><b style="color: red">*</b></span></label>
                <select name="rol" id="placas<?php echo $id_map;?>" class="col-sm-9 form-control">
                    <?php
                        $query_autos = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE estado = '1' AND sis_docente = '$sis_docente' AND (estado_vehiculo = 'COMPARTIDO' OR estado_vehiculo = 'OTRO')");
                        $query_autos->execute();
                        $autos = $query_autos->fetchAll(PDO::FETCH_ASSOC);
                            foreach($autos as $auto){                                
                                $placas = $auto['placa'];
                    ?>
                        <option value="<?php echo $placas;?>"><?php echo $placas;?></option>
                            
                    <?php
                    }  
                    ?>
                </select>        
        </div>

             <script>
                $('#btn_registrar_ticket<?php echo $id_map;?>').removeAttr('disabled');
            </script>

    <?php    

    }

