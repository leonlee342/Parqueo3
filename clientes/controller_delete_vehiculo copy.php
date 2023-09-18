<?php
include('../app/config.php');

$id_user = $_GET['id_user'];
$estado_inactivo = "0";

date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");

//BUSCA EL SIS DEL DOCENTE EN LA TABLA VEHICULOS tb_vehiculos
$query_sis = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE estado = '1' AND id = '$id_user' ");
$query_sis->execute();
$sis = $query_sis->fetchAll(PDO::FETCH_ASSOC);
foreach($sis as $si){
    $sis_docente = $si['sis_docente'];              
}


//ELIMINA TODOS LOS REGISTROS CON EL CODIGO SIS DEL DOCENTE EN LA TABLA tb_vehiculos
$sentencia = $pdo->prepare("UPDATE tb_vehiculos SET
estado = :estado,
fyh_eliminacion = :fyh_eliminacion
WHERE id = :id");

$sentencia->bindParam(':estado',$estado_inactivo);
$sentencia->bindParam(':fyh_eliminacion',$fechaHora);
$sentencia->bindParam(':id',$id_user);

if($sentencia->execute()){
    echo "se elimino el registro de la manera correcta";
    ?>
        <script>location.href = "../clientes/listado_vehiculos.php";</script>
    <?php
}else{
    echo "error al eliminar el registro";
}

?>