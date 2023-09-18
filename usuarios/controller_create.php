<?php

include ('../app/config.php');

$nombres = $_GET['nombres'];
$email = $_GET['email'];
$password_user = $_GET['password_user'];

// VALIDACIONES
  if(!preg_match("/^['a-zA-Z-' ]*$/",$nombres)){
  echo "EL USUARIO NO COINCIDE CON EL FORMATO SOLICITADO DEBE SER: nombre apellido";
  exit();
}  

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
 //echo "correcto";
}else{
  echo "El correo debe tener el formato siguiente usuario@usuario.com";
  exit();
}

if(strlen($password_user)<6){
  echo "LA CONTRASEÑA DEBE TENER MINIMO 5 CARACTERES";
  exit();
} 


 
 

// Para obtener la fecha actual busco zona horaria en la pagina de php, pero no hay Bolivia asi que utilizare caracas
date_default_timezone_set("America/Caracas");
$fechaHora = date(format: "Y-m-d h:i:s");

//echo $nombres ."-".$email. "-".$password_user;

// BUSCAR EN LA TABLA tb_usuarios SI EXISTE UN REGISTRO REPETIDO DE USUARIO.
$contador_usuario = 0; 
$query_usuarios = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = '$email' AND estado = '1' ");
$query_usuarios->execute();
$datos_usuarios = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);
foreach($datos_usuarios as $datos_usuario){
    $contador_usuario = $contador_usuario + 1; 
}

if($contador_usuario == "0"){
  echo "NO HAY NINGUN REGISTRO IGUAL";

          
        $sentencia = $pdo->prepare( "INSERT INTO tb_usuarios
        (nombres, email, password_user, fyh_creacion, estado)
        VALUES (:nombres, :email,:password_user, :fyh_creacion, :estado)");

        $sentencia->bindParam('nombres',$nombres);
        $sentencia->bindParam('email',$email);
        $sentencia->bindParam('password_user',$password_user);
        $sentencia->bindParam('fyh_creacion',$fechaHora);
        $sentencia->bindParam('estado',$estado_del_registro);

        // utilizo script y no header para rediccionar, luego del registro porque en ajax no permite usar header
        if($sentencia->execute()){
        echo "Registro satisfactorio";
        //header('index.php');
        ?>
        <script>location.href= "../roles/asignar.php";</script>
        <?php    
        }else{
        echo "no se pudo registrar a la base de datos";
        }



}else{
  ?>
    <div class="alert alert-danger">
        ESTE CORREO YA SE ENCUENTRA REGISTRADO
    </div>
  <?php

}




  