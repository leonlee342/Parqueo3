<?php
include ('../app/config.php');

echo $nombre = $_GET['nombre'];

// Para obtener la fecha actual busco zona horaria en la pagina de php, pero no hay Bolivia asi que utilizare caracas
date_default_timezone_set("America/Caracas");
//$fechaHora = date(format: "Y-m-d h:i:s");
$fechaHora = date("Y-m-d h:i:s");



//echo $nombres ."-".$email. "-".$password_user;

$sentencia = $pdo->prepare( "INSERT INTO tb_roles
                          (nombre,  fyh_creacion, estado)
                   VALUES (:nombre, :fyh_creacion, :estado)");

$sentencia->bindParam('nombre',$nombre);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_del_registro);

// utilizo script y no header para rediccionar, luego del registro porque en ajax no permite usar header
if($sentencia->execute()){
    echo "Registro satisfactorio";
    //header('index.php');
    ?>
      <script>location.href= "index.php";</script>
    <?php    
}else{
    echo "no se pudo registrar a la base de datos";
} 