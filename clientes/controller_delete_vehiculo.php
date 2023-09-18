<?php
include('../app/config.php');

$id_user = $_GET['id_user'];
$estado_inactivo = "0";
$estado_espacio = "DISPONIBLE";

date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");

//BUSCA EL SIS DEL DOCENTE EN LA TABLA VEHICULOS tb_vehiculos
$query_sis = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE estado = '1' AND id = '$id_user' ");
$query_sis->execute();
$sis = $query_sis->fetchAll(PDO::FETCH_ASSOC);
foreach($sis as $si){
    $sis_docente = $si['sis_docente'];      
    $nro_espacio = $si['nro_espacio'];      
}


//ELIMINA TODOS LOS REGISTROS CON EL CODIGO SIS DEL DOCENTE EN LA TABLA tb_vehiculos
$sentencia = $pdo->prepare("UPDATE tb_vehiculos SET
estado = :estado,
fyh_eliminacion = :fyh_eliminacion
WHERE sis_docente = :sis_docente");

$sentencia->bindParam(':estado',$estado_inactivo);
$sentencia->bindParam(':fyh_eliminacion',$fechaHora);
$sentencia->bindParam(':sis_docente',$sis_docente);

if($sentencia->execute()){
    echo "se elimino el registro de la manera correcta";
/*     ?>
        <script>location.href = "../clientes/listado_vehiculos.php";</script>
    <?php */
}else{
    echo "error al eliminar el registro";
}

// CAMBIA EL ESTADO DE LIBRE A DISPONIBLE EN LA TABLA MAPEOS
$sentencia2 = $pdo->prepare("UPDATE tb_mapeos SET
estado_espacio = :estado_espacio
WHERE nro_espacio = :nro_espacio");

$sentencia2->bindParam(':estado_espacio',$estado_espacio);
$sentencia2->bindParam(':nro_espacio',$nro_espacio);

if($sentencia2->execute()){
    echo "se elimino el registro de la manera correcta";
    ?>
        <script>location.href = "../clientes/listado_vehiculos.php";</script>
    <?php
}else{
    echo "error al eliminar el registro";
}






?>
