<?php

include ('../app/config.php');

$nombre_cliente = $_GET['nombres'];
$nit_ci_cliente = $_GET['ci'];
$placa_auto = $_GET['placa'];

//echo $nombres." - ".$ci." - ".$email." - ".$telefono;

 // Para obtener la fecha actual busco zona horaria en la pagina de php, pero no hay Bolivia asi que utilizare caracas
date_default_timezone_set("America/Caracas");
$fechaHora = date(format: "Y-m-d h:i:s");

//INSERTA LA INFORMACION EN LA TABLA CLIENTES
$sentencia = $pdo->prepare( "INSERT INTO tb_docentes
                          (nombre_cliente, nit_ci_cliente, placa_auto, fyh_creacion, estado)
                   VALUES (:nombre_cliente,:nit_ci_cliente , :placa_auto, :fyh_creacion, :estado)");

$sentencia->bindParam('nombre_cliente',$nombre_cliente);
$sentencia->bindParam('nit_ci_cliente',$nit_ci_cliente);
$sentencia->bindParam('placa_auto',$placa_auto);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_del_registro);

// utilizo script y no header para rediccionar, luego del registro porque en ajax no permite usar header
if($sentencia->execute()){
   // echo "Registro satisfactorio";
    //header('index.php');  
}else{
    echo "no se pudo registrar a la base de datos";
} 

?>