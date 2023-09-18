<?php
include('../app/config.php');

$id_user = $_GET['id_user'];
$estado_inactivo = "0";

date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_clientes SET
estado = :estado,
fyh_eliminacion = :fyh_eliminacion
WHERE id = :id");

$sentencia->bindParam(':estado',$estado_inactivo);
$sentencia->bindParam(':fyh_eliminacion',$fechaHora);
$sentencia->bindParam(':id',$id_user);

if($sentencia->execute()){
    echo "se elimino el registro de la manera correcta";
    ?>
        <script>location.href = "../clientes/";</script>
    <?php
}else{
    echo "error al eliminar el registro";
}

?>