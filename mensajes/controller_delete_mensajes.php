<?php
include('../app/config.php');

$id_mensaje = $_GET['id'];
$estado_inactivo = "0";


date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d");

$sentencia = $pdo->prepare("UPDATE tb_mensaje SET 
estado = :estado, 
fyh_eliminacion = :fyh_eliminacion
WHERE id_mensaje = :id_mensaje");

$sentencia->bindParam(':estado', $estado_inactivo);
$sentencia->bindParam(':fyh_eliminacion', $fechaHora);
$sentencia->bindParam(':id_mensaje', $id_mensaje);

if($sentencia->execute()){
    echo "SE ELIMINO EL REGISTRO DE MANERA CORRECTA";
/*     ?>
    <script>location.href = "../perfil_usuario.php"; </script>
    <?php */
}else{
    echo "ERROR AL ELIMINAR EL REGISTRO";
}





?>