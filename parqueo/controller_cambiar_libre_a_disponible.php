<?php

include('../app/config.php');

$id_map = $_GET['id'];
$estado_espacio = "DISPONIBLE";
$estado_inactivo = "0";


$query_registros = $pdo->prepare("SELECT * FROM tb_registros WHERE nro_espacio = '$id_map' AND estado = '1'");
$query_registros->execute();
$registros = $query_registros->fetchAll(PDO::FETCH_ASSOC);
  foreach($registros as $registro){
      $id_registro = $registro['id_registro'];
  }


date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");
//echo $nombres."-".$email."-".$password_user;

//////////////////////////////CAMBIA EL ESTADO DE LIBRE A DISPONIBLE EN MAPEOS
$sentencia = $pdo->prepare("UPDATE tb_mapeos SET
estado_espacio = :estado_espacio,
fyh_actualizacion = :fyh_actualizacion 
WHERE id_map = :id_map");

$sentencia->bindParam(':estado_espacio',$estado_espacio);
$sentencia->bindParam(':fyh_actualizacion',$fechaHora);
$sentencia->bindParam(':id_map',$id_map);



if($sentencia->execute()){

        //////////////////////////////CAMBIA EN LA TABLA REGISTROS EL ESTADO DEL DOCENTE 
        $sentencia2 = $pdo->prepare("DELETE FROM tb_registros WHERE id_registro = '$id_registro' ");
        if($sentencia2->execute()){
            echo "SE ELIMINO DE MANERA CORRECTA";
        }else{
            echo "ERROR AL ELIMINAR";
        }


    echo "se actualizo el registro de la manera correcta";
     ?>
    <script>location.href = "principal_parqueo1.php";</script>
    <?php 
}else{
    echo "error al actualizar el registro";
} 