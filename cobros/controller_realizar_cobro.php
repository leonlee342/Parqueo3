<?php
include('../app/config.php');
include('../layout/admin/datos_usuario_sesion.php');

$id_registro = $_GET['id'];

date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d h:i:s");
$fecha= date("Y-m-d");

//RECUPERANDO DATOS DE LA TABLA REGISTROS PARA EL HISTORIAL DE COBROS
$query_cobro = $pdo->prepare("SELECT * FROM tb_registros WHERE id_registro = '$id_registro' AND estado = '1'");
$query_cobro->execute();
$cobros = $query_cobro->fetchAll(PDO::FETCH_ASSOC);
foreach ($cobros as $cobro){    
    $id_registro = $cobro['id_registro'];
    $nombre_cliente = $cobro['nombre_cliente'];
    $nit_ci = $cobro['nit_ci'];
    $placa = $cobro['placa'];    
    $cuota = $cobro['cuota'];                                         
}

$estado_cuota = "Cancelado";
//INSERTANDO INFORMACION DEL COBRO EN LA TABLA COBROS tb_cobros
$sentencia = $pdo->prepare("INSERT INTO tb_cobros
             (nombre_cliente, nit_ci, placa, cuota, estado_cuota, fecha_pago, fyh_creacion, estado)
 VALUES (:nombre_cliente, :nit_ci, :placa, :cuota, :estado_cuota, :fecha_pago, :fyh_creacion, :estado)");

$sentencia->bindParam('nombre_cliente',$nombre_cliente); 
$sentencia->bindParam('nit_ci',$nit_ci); 
$sentencia->bindParam('placa',$placa); 
$sentencia->bindParam('cuota',$cuota); 
$sentencia->bindParam('estado_cuota',$estado_cuota); 
$sentencia->bindParam('fecha_pago',$fecha); 
$sentencia->bindParam('fyh_creacion',$fechaHora); 
$sentencia->bindParam('estado',$estado_del_registro); 

if($sentencia->execute()){

    $cuota_pagada = "0";

    $sentencia2 = $pdo->prepare("UPDATE tb_registros SET 
    cuota = :cuota, 
    fyh_actualizacion = :fyh_actualizacion
    WHERE id_registro = :id_registro");
    
    $sentencia2->bindParam(':cuota', $cuota_pagada);
    $sentencia2->bindParam(':fyh_actualizacion', $fechaHora);
    $sentencia2->bindParam(':id_registro', $id_registro);

    if($sentencia2->execute()){
        echo "se elimino la cuota";
    }else{
        echo "error al eliminar";
    }
    
    echo "registrao realizado";

    ?>
    <script>location.href = "../cobros" </script>
    <?php
}else{
    echo "No se pudo registrar a la base de datos";
}


?>