<?php
include('../app/config.php');
include('../layout/admin/datos_usuario_sesion.php');

$fecha1 = $_GET['fecha1'];
$fecha2 = $_GET['fecha2'];


$id_horario = "1";

$sentencia = $pdo->prepare("UPDATE tb_horarios SET 
fecha1 = :fecha1, 
fecha2 = :fecha2
WHERE id_horario = :id_horario");

$sentencia->bindParam(':fecha1', $fecha1);
$sentencia->bindParam(':fecha2', $fecha2);
$sentencia->bindParam(':id_horario', $id_horario);

if($sentencia->execute()){
    echo "SE ACTUALIZO DE MANERA CORRECTA";
/*     ?>
    <script>location.href = "../usuarios/"; </script>
    <?php */
}else{
    echo "ERROR AL ACTUALIZAR LOS DATOS";
}





?>