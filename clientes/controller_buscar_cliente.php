<?php

include('../app/config.php');

$cliente_ci = $_GET['cliente'];
//echo "buscando cliente".$placa;

$id = '';
$nombres = '';
$ci = '';

$query_buscars = $pdo->prepare("SELECT * FROM tb_clientes WHERE estado = '1' AND ci = '$cliente_ci'");
$query_buscars->execute();
$buscars = $query_buscars->fetchAll(PDO::FETCH_ASSOC);
foreach ($buscars as $buscar){
    $id = $buscar ['id'];
    $nombres = $buscar['nombres'];
    $ci = $buscar['ci'];
}

if($nombres == ""){
    echo "No existe un cliente coon este carnet";
}else{
    echo $nombres." - ".$ci;
}


?>