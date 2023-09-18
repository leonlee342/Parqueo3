<?php
include('../app/config.php');
include('../layout/admin/datos_usuario_sesion.php');

$lunes1 = $_GET['lunes1'];
$martes1 = $_GET['martes1'];
$miercoles1 = $_GET['miercoles1'];
$jueves1 = $_GET['jueves1'];
$viernes1 = $_GET['viernes1'];
$sabado1 = $_GET['sabado1'];
$lunes2 = $_GET['lunes2'];
$martes2 = $_GET['martes2'];
$miercoles2 = $_GET['miercoles2'];
$jueves2 = $_GET['jueves2'];
$viernes2 = $_GET['viernes2'];
$sabado2 = $_GET['sabado2'];
$lunes3 = $_GET['lunes3'];
$martes3 = $_GET['martes3'];
$miercoles3 = $_GET['miercoles3'];
$jueves3 = $_GET['jueves3'];
$viernes3 = $_GET['viernes3'];
$sabado3 = $_GET['sabado3'];

$id = "1";

date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d");

$sentencia = $pdo->prepare("UPDATE tb_horarios SET
lunes1 = :lunes1,
martes1 = :martes1,
miercoles1 = :miercoles1,
jueves1 = :jueves1,
viernes1 = :viernes1,
sabado1 = :sabado1,
lunes2 = :lunes2,
martes2 = :martes2,
miercoles2 = :miercoles2,
jueves2 = :jueves2,
viernes2 = :viernes2,
sabado2 = :sabado2,
lunes3 = :lunes3,
martes3 = :martes3,
miercoles3 = :miercoles3,
jueves3 = :jueves3,
viernes3 = :viernes3,
sabado3 = :sabado3,
fyh_actualizacion = :fyh_actualizacion
WHERE id_horario = :id_horario");

$sentencia->bindParam(':lunes1',$lunes1); 
$sentencia->bindParam(':martes1',$martes1); 
$sentencia->bindParam(':miercoles1',$miercoles1); 
$sentencia->bindParam(':jueves1',$jueves1); 
$sentencia->bindParam(':viernes1',$viernes1); 
$sentencia->bindParam(':sabado1',$sabado1); 
$sentencia->bindParam(':lunes2',$lunes2); 
$sentencia->bindParam(':martes2',$martes2); 
$sentencia->bindParam(':miercoles2',$miercoles2); 
$sentencia->bindParam(':jueves2',$jueves2); 
$sentencia->bindParam(':viernes2',$viernes2); 
$sentencia->bindParam(':sabado2',$sabado2); 
$sentencia->bindParam(':lunes3',$lunes3); 
$sentencia->bindParam(':martes3',$martes3); 
$sentencia->bindParam(':miercoles3',$miercoles3); 
$sentencia->bindParam(':jueves3',$jueves3); 
$sentencia->bindParam(':viernes3',$viernes3); 
$sentencia->bindParam(':sabado3',$sabado3); 

$sentencia->bindParam(':fyh_actualizacion',$fechaHora); 
$sentencia->bindParam(':id_horario', $id);
 

if($sentencia->execute()){
    echo "REGISTRO REALIZADO SATISFACTORIAMENTE";
    ?>
    <script>location.href = "../configuraciones/horarios.php"; </script>
    <?php
}else{
    echo "No se pudo registrar a la base de datos";
}









?>