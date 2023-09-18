<?php
include('../app/config.php');
include('../layout/admin/datos_usuario_sesion.php');

$id_map = $_GET['id_map'];
$estado_inactivo = "0";

date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d");
// $fechaHora = date("Y-m-d h:i:s"); debido a la version de php esta parte no da

$sentencia = $pdo->prepare("UPDATE tb_mapeos SET 
estado = :estado, 
fyh_eliminacion = :fyh_eliminacion
WHERE id_map = :id_map");

$sentencia->bindParam(':estado', $estado_inactivo);
$sentencia->bindParam(':fyh_eliminacion', $fechaHora);
$sentencia->bindParam(':id_map', $id_map);

if($sentencia->execute()){
    echo "SE ELIMINO EL REGISTRO DE MANERA CORRECTA";
    ?>
    <script>location.href = "../parqueo/mapeo_de_vehiculos.php"; </script>
    <?php
}else{
    echo "ERROR AL ELIMINAR EL REGISTRO";
}


?>