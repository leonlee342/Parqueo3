<?php

include('../app/config.php');

$id_ticket = $_GET['id'];
$cuviculo = $_GET['cuviculo'];
$estado_inactivo = "0";

date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d ");

$sentencia = $pdo->prepare("UPDATE tb_tickets SET 
estado = :estado, 
fyh_eliminacion = :fyh_eliminacion
WHERE id_ticket = :id_ticket");

$sentencia->bindParam(':estado', $estado_inactivo);
$sentencia->bindParam(':fyh_eliminacion', $fechaHora);
$sentencia->bindParam(':id_ticket', $id_ticket);

if($sentencia->execute()){

    //ACTUALIZANDO EL ESTADO DEL VEHICULO DE OCUPADO A LIBRE
    $estado_espacio = "LIBRE";
    $sentencia2 = $pdo->prepare("UPDATE tb_mapeos2 SET 
    estado_espacio = :estado_espacio, 
    fyh_actualizacion = :fyh_actualizacion
    WHERE nro_espacio = :nro_espacio");

    $sentencia2->bindParam(':estado_espacio', $estado_espacio);
    $sentencia2->bindParam(':fyh_actualizacion', $fechaHora);
    $sentencia2->bindParam(':nro_espacio', $cuviculo);

    if($sentencia2->execute()){
        echo "SE ACTUALIZO EL ESTADO DEL ESPACIO A LIBRE";

        echo "SE ELIMINO EL REGISTRO DE MANERA CORRECTA";
        ?>
        <script>location.href = "../parqueo2/principal_parqueo1.php"; </script>
        <?php
    }else{
        echo "ERROR AL ACTUALIZAR EL ESTADO DEL ESPACIO";
    }

}else{
    echo "ERROR AL ELIMINAR EL REGISTRO";
}


?>