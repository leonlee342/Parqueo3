<?php

session_start();
if(isset($_SESSION['usuario_sesion'])){
  // aqui esta el email del usuario que inicia sesion
$usuario_sesion = $_SESSION['usuario_sesion'];

$query_usuario_sesion = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = '$usuario_sesion' AND estado = '1'");
$query_usuario_sesion->execute();
$usuarios_sesions = $query_usuario_sesion->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios_sesions as $usuarios_sesion){
    $id_user_sesion = $usuarios_sesion ['id'];
    $nombres_sesion = $usuarios_sesion['nombres'];
    $email_sesion = $usuarios_sesion['email'];
    $rol_sesion = $usuarios_sesion['rol'];
}
    //  echo "existe sesion";
}else{
  echo "Para ingresar a esta plataforma debe de iniciar sesion";
  header('Location: '.$URL.'/login');
}
?>