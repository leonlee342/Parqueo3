<?php

include ('../app/config.php');

$nombres = $_GET['nombres'];
$ci = $_GET['ci'];
$sis_docente = $_GET['sis_docente'];
$password_docente = $_GET['password_docente'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];

//VALIDACIONES DE CAMPO
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


//echo $nombres." - ".$ci." - ".$email." - ".$telefono;

 // Para obtener la fecha actual busco zona horaria en la pagina de php, pero no hay Bolivia asi que utilizare caracas
date_default_timezone_set("America/Caracas");
//$fechaHora = date(format: "Y-m-d h:i:s");
$fechaHora = date( "Y-m-d h:i:s");

//INSERTA LA INFORMACION EN LA TABLA CLIENTES
$sentencia = $pdo->prepare( "INSERT INTO tb_clientes
                          (nombres, ci, sis_docente, password_docente ,email, telefono, fyh_creacion, estado)
                   VALUES (:nombres,:ci , :sis_docente, :password_docente, :email,:telefono, :fyh_creacion, :estado)");

$sentencia->bindParam('nombres',$nombres);
$sentencia->bindParam('ci',$ci);
$sentencia->bindParam('sis_docente',$sis_docente);
$sentencia->bindParam('password_docente',$password_docente);
$sentencia->bindParam('email',$email);
$sentencia->bindParam('telefono',$telefono);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_del_registro);

// utilizo script y no header para rediccionar, luego del registro porque en ajax no permite usar header
if($sentencia->execute()){
    echo "Registro satisfactorio";
    //header('index.php');
    ?>
      <script>location.href= "./index.php";</script>
    <?php    
}else{
    echo "no se pudo registrar a la base de datos";
} 

?> 