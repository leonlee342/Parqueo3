<?php

include('../app/config.php');

$placa = $_GET['placa'];
$marca = $_GET['marca'];
$modelo = $_GET['modelo'];
$color = $_GET['color'];
$id_user = $_GET['id_user'];

// Se coloca caracas porque no existe en php zona horaria para Bolivia
date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");
//echo $nombres."-".$email."-".$password_user;

$sentencia = $pdo->prepare("UPDATE tb_vehiculos SET
placa = :placa,
marca = :marca,
modelo = :modelo,
color = :color,
fyh_actualizacion = :fyh_actualizacion 
WHERE id = :id");

$sentencia->bindParam(':placa',$placa);
$sentencia->bindParam(':marca',$marca);
$sentencia->bindParam(':modelo',$modelo);
$sentencia->bindParam(':color',$color);
$sentencia->bindParam(':fyh_actualizacion',$fechaHora);
$sentencia->bindParam(':id',$id_user);

if($sentencia->execute()){
    echo "se actualizo el registro de la manera correcta";
    ?>
    <script>location.href = "../clientes/listado_vehiculos.php";</script>
    <?php
}else{
    echo "error al actualizar el registro";
}