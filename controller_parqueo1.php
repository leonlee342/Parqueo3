<?php

include('app/config.php');

$id_parqueo1 = $_GET['id_parqueo1'];

//echo $id_parqueo1;

$query_mapeos = $pdo->prepare("SELECT * FROM tb_mapeos_estatico WHERE estado = '1'");
$query_mapeos->execute();
$mapeos = $query_mapeos->fetchAll(PDO::FETCH_ASSOC);
foreach ($mapeos as $mapeo){
    $id_map = $mapeo ['id_map'];
    $nro_espacio = $mapeo['nro_espacio'];
    $estado_espacio = $mapeo['estado_espacio'];
}

if($estado_espacio == "LIBRE"){?>

<div class="col" id="" style="position:absolute; top: 0%; right:-35%">
<center class="">
    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 60px" >
        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="30px" alt="">                             
    </button>                                            
</center>                          
</div> 

<?php
}
?>
