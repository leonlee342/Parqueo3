<?php

include('../app/config.php');

$nombres = $_GET['nombres'];
$ci = $_GET['ci'];
$sis_docente = $_GET['sis_docente'];
$password_docente = $_GET['password_docente'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
$id_user = $_GET['id_user'];

//VALIDAR LOS CAMPOS DEL FORMULARIO
if(!preg_match("/^['a-zA-Z-' ]*$/",$nombres)){
    echo "EL USUARIO NO COINCIDE CON EL FORMATO SOLICITADO DEBE SER: nombre apellido";
    exit();
  } 

  if(strlen($nombres)<6){
    echo "EL NOMBRE DEBE TENER MAS DE 5 CARACTERES";
    exit();
  } 

  if(!preg_match("/^[0-9]*$/",$ci)){
    echo "EL CI SOLO PUEDE CONTENER NUMEROS, no menor a 5 y no mayor a 10 digitos: Ejem: 45454545";
    exit();
  }  

  if(!preg_match("/^[0-9]*$/",$sis_docente)){
    echo "EL CODIGO SIS SOLO PUEDE CONTENER NUMEROS, NO MENOR A 5 Y NO MAYOR A 15 DIGITOS";
    exit();
  }      

  if(strlen($password_docente)<6){
    echo "LA CONTRASEÑA DEBE TENER MINIMO 5 CARACTERES";
    exit();
  } 

  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //echo "correcto";
   }else{
     echo "El correo debe tener el formato siguiente usuario@usuario.com";
     exit();
   }

   if(!preg_match("/^[0-9]*$/",$telefono)){
    echo "EL TELEFONO SOLO PUEDE CONTENER NUMEROS, NO MAYOR A 5 Y NO MAYOR A 10 DIGITOS";
    exit();
  } 







// Se coloca caracas porque no existe en php zona horaria para Bolivia
date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");
//echo $nombres."-".$email."-".$password_user;

$sentencia = $pdo->prepare("UPDATE tb_clientes SET
nombres = :nombres,
ci = :ci,
sis_docente = :sis_docente,
password_docente = :password_docente,
email = :email,
telefono = :telefono,
fyh_actualizacion = :fyh_actualizacion 
WHERE id = :id");

$sentencia->bindParam(':nombres',$nombres);
$sentencia->bindParam(':ci',$ci);
$sentencia->bindParam(':sis_docente',$sis_docente);
$sentencia->bindParam(':password_docente',$password_docente);
$sentencia->bindParam(':email',$email);
$sentencia->bindParam(':telefono',$telefono);
$sentencia->bindParam(':fyh_actualizacion',$fechaHora);
$sentencia->bindParam(':id',$id_user);

if($sentencia->execute()){
    echo "se actualizo el registro de la manera correcta";
    ?>
    <script>location.href = "../clientes/";</script>
    <?php
}else{
    echo "error al actualizar el registro";
}