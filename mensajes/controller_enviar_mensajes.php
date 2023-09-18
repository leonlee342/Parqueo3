<?php
//SE CREO CONTROLADOR SIN HORA PARA EVITAR EL ERROR DE LA VERSION DE PHP- ACTUALIZAR
include('../app/config.php');

$asunto = $_POST['asunto'];
$id = $_POST['docente'];
$mensaje_docente = $_POST['mensaje'];

date_default_timezone_set("America/Caracas");
//$fechaHora = date("Y-m-d h:i:s");

//$fechaHora = getdate();
//print_r($fechaHora);

$query_mensajes = $pdo->prepare("SELECT * FROM tb_clientes WHERE id = '$id' AND estado = '1'  ");
$query_mensajes->execute();
$mensajes = $query_mensajes->fetchAll(PDO::FETCH_ASSOC);
foreach($mensajes as $mensaje){
    $id = $mensaje['id'];
    $nombres = $mensaje['nombres'];
    $sis_docente = $mensaje['sis_docente'];                     
}


$sentencia = $pdo->prepare('INSERT INTO tb_mensaje
(sis_docente,nombre_docente,asunto_reclamo, mensaje, estado)
VALUES ( :sis_docente,:nombre_docente,:asunto_reclamo,:mensaje, :estado)');

$sentencia->bindParam(':sis_docente',$sis_docente);
$sentencia->bindParam(':nombre_docente',$nombres);
$sentencia->bindParam(':asunto_reclamo',$asunto);
$sentencia->bindParam(':mensaje',$mensaje_docente);
$sentencia->bindParam('estado',$estado_del_registro);

if($sentencia->execute()){
echo 'success';
//header('Location:' .$URL.'/');
?>
<script>location.href = "enviar_mensaje.php"; </script> 
<?php
}else{
echo 'error al registrar a la base de datos';
}





?>