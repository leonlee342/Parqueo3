<?php

include ('../app/config.php');

$placa = $_GET['placa'];
$nombre_cliente = $_GET['nombre_cliente'];
$nro_espacio = $_GET['cuviculo'];
$nit_ci = $_GET['nit_ci'];
$parqueo_nro = "2";

$cuota = "75";

// Para obtener la fecha actual busco zona horaria en la pagina de php, pero no hay Bolivia asi que utilizare caracas
date_default_timezone_set("America/Caracas");
$fechaHora = date(format: "Y-m-d");

//CALCULO DE LA FECHA DE COBRO mas 1 mes
$fecha_cobro = date ( 'Y-m-d' , strtotime($fechaHora. '+ 1 month'));

//ESTADO DE COBRO
$estado_cobro = "Al dia";

$sentencia = $pdo->prepare( "INSERT INTO tb_registros 
                          (nombre_cliente,nit_ci, placa, nro_espacio, parqueo_nro, cuota, primer_cobro, estado_cobro, fyh_creacion, estado)
                   VALUES (:nombre_cliente,:nit_ci, :placa,:nro_espacio, :parqueo_nro, :cuota, :primer_cobro, :estado_cobro, :fyh_creacion, :estado)");

$sentencia->bindParam('nombre_cliente',$nombre_cliente);
$sentencia->bindParam('nit_ci',$nit_ci);
$sentencia->bindParam('placa',$placa);
$sentencia->bindParam('nro_espacio',$nro_espacio);
$sentencia->bindParam('parqueo_nro',$parqueo_nro);
$sentencia->bindParam('cuota',$cuota);
$sentencia->bindParam('primer_cobro',$fecha_cobro);
$sentencia->bindParam('estado_cobro',$estado_cobro);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_del_registro);

// utilizo script y no header para rediccionar, luego del registro porque en ajax no permite usar header
if($sentencia->execute()){
    echo "Registro satisfactorio";
    //header('index.php');
    ?>
      <script>location.href= "../parqueo2/principal_parqueo1.php";</script>
    <?php    
}else{
    echo "no se pudo registrar a la base de datos";
}

?>