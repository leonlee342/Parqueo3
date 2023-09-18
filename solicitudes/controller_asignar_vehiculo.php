
<?php
include('../app/config.php');

$id = $_GET['id'];
$estado_inactivo = "0";

date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_solicitud_vehiculo SET
estado = :estado,
fyh_eliminacio = :fyh_eliminacio
WHERE id = :id");

$sentencia->bindParam(':estado',$estado_inactivo);
$sentencia->bindParam(':fyh_eliminacio',$fechaHora);
$sentencia->bindParam(':id',$id);

if($sentencia->execute()){
    echo "se elimino el registro de la manera correcta";
    ?>
        <script>location.href = "../solicitudes/";</script>
    <?php
}else{
    echo "error al eliminar el registro";
}

?>