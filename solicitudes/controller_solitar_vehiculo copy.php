<?php

include ('../app/config.php');

$sis_docente = $_GET['sis_docente'];
$placa = $_GET['placa_enviar'];
$marca = $_GET['marca_enviar'];
$modelo = $_GET['modelo_enviar'];
$color = $_GET['color_enviar'];

// Para obtener la fecha actual busco zona horaria en la pagina de php, pero no hay Bolivia asi que utilizare caracas
date_default_timezone_set("America/Caracas");
$fechaHora = date(format: "Y-m-d h:i:s");

//ESTA PARTE BUSCA SI HAY UN REGISTRO REPETIDO
$contador_ticket = 0;
$query_tickets = $pdo->prepare("SELECT * FROM tb_solicitud_vehiculo WHERE placa = '$placa' AND estado = '1' ");
$query_tickets->execute();
$datos_tickets = $query_tickets->fetchAll(PDO::FETCH_ASSOC);
foreach($datos_tickets as $datos_ticket){
    $contador_ticket = $contador_ticket + 1;   
}







$sentencia = $pdo->prepare( "INSERT INTO tb_solicitud_vehiculo
                          (placa, sis_docente, marca, modelo, color, fyh_creacion, estado)
                   VALUES (:placa,:sis_docente,:marca ,:modelo,:color, :fyh_creacion, :estado)");

$sentencia->bindParam('placa',$placa);
$sentencia->bindParam('sis_docente',$sis_docente);
$sentencia->bindParam('marca',$marca);
$sentencia->bindParam('modelo',$modelo);
$sentencia->bindParam('color',$color);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_del_registro);

// utilizo script y no header para rediccionar, luego del registro porque en ajax no permite usar header
if($sentencia->execute()){
    echo "Registro satisfactorio";
    
    //header('index.php');
    ?>
       <script>alert ('REGISTRO ENVIADO');</script> 
      <!-- <script>location.href= "perfil_usuario.php"</script>  -->
    <?php    
}else{
    echo "no se pudo registrar a la base de datos";
} 






?>