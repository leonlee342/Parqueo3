<?php

include('../app/config.php');

$cuviculo = $_GET['cuviculo'];
$placa = $_GET['placa'];
$estado_espacio = "LIBRE";
$parqueo_nro = "2";


date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");
//echo $nombres."-".$email."-".$password_user;

//ESTA PARTE INSERTA EL NUMERO DE ESPACIO EN LA TABLA tb_vehiculos PARA QUE APARESCA EN LA SESION DEL DOCENTE
$sentencia1 = $pdo->prepare("UPDATE tb_vehiculos SET 
nro_espacio = :nro_espacio,
parqueo_nro = :parqueo_nro
WHERE placa = :placa");

$sentencia1->bindParam(':nro_espacio', $cuviculo);
$sentencia1->bindParam(':parqueo_nro',$parqueo_nro);
$sentencia1->bindParam(':placa', $placa);

if($sentencia1->execute()){
echo 'success';
//header('Location:' .$URL.'/');
}else{
echo 'error al registrar a la base de datos';
}

//CAMBIA EL ESTADO DEL CUBICULO DE DISPONIBLE A LIBRE

$sentencia = $pdo->prepare("UPDATE tb_mapeos2 SET
estado_espacio = :estado_espacio,
fyh_actualizacion = :fyh_actualizacion 
WHERE id_map = :id_map");

$sentencia->bindParam(':estado_espacio',$estado_espacio);
$sentencia->bindParam(':fyh_actualizacion',$fechaHora);
$sentencia->bindParam(':id_map',$cuviculo);

if($sentencia->execute()){
    echo "se actualizo el registro de la manera correcta";
     ?>
    <script>location.href = "principal_parqueo1.php";</script>
    <?php 
}else{
    echo "error al actualizar el registro";
} 