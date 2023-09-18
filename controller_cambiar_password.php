<?php
include ('app/config.php');

/* if(!preg_match("/^[a-zA-Z]{3,10}$/",$_GET['sis_docente'])){
    echo "El password no coincide con el formato solicitado";
    exit();
} */


$sis_docente = $_GET['sis_docente'];
$password_docente = $_GET['nuevo_password'];
$confirmar_password = $_GET['confirmar_password'];

//VALIDACIONDE CONTRASEÑA
if(strlen($confirmar_password)<6){
    echo "LA CONTRASEÑA DEBE TENER MINIMO 5 CARACTERES";
    exit();
  } 

date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d");

//echo $nombres."-".$email."-".$password_user;

$sentencia = $pdo->prepare("UPDATE tb_clientes SET 
password_docente = :password_docente,
fyh_actualizacion = :fyh_actualizacion
WHERE sis_docente = :sis_docente");

$sentencia->bindParam(':password_docente', $password_docente);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':sis_docente', $sis_docente);

if($sentencia->execute()){
    echo "SE ACTUALIZO DE MANERA CORRECTA";

?>
<script>
Swal.fire({
    position: 'top-center',
    icon: 'success',
    title: 'La contraseña fue cambiada exitosamente',
    showConfirmButton: false,
    timer: 2000
    })

$('#resultado').html(respuesta);
$('#nuevo_password').val('');
$('#confirmar_password').val('');

</script>
 <?php


/*     ?>
    <script>location.href = "../usuarios/"; </script>
    <?php */
}else{
    echo "ERROR AL ACTUALIZAR LOS DATOS";
}
