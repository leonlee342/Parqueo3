<?php

include('../app/config.php');

$id_reclamo = $_POST['id_reclamo'];
$estado_inactivo = "0";

date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_realizar_reclamo SET 
estado = :estado, 
fyh_eliminacion = :fyh_eliminacion
WHERE id_reclamo = :id_reclamo");

$sentencia->bindParam(':estado', $estado_inactivo);
$sentencia->bindParam(':fyh_eliminacion', $fechaHora);
$sentencia->bindParam(':id_reclamo', $id_reclamo);

if($sentencia->execute()){
    echo "SE ELIMINO EL REGISTRO DE MANERA CORRECTA";
    ?>
    <script>location.href = "../reclamos/"; </script>
    <?php
}else{
    echo "ERROR AL ELIMINAR EL REGISTRO";
}


?>