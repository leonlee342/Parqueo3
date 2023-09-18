<?php
include('../app/config.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$id_user = $_POST['id_user'];
$rol = $_POST['rol'];

// Se coloca caracas porque no existe en php zona horaria para Bolivia
date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_usuarios SET
rol = :rol
WHERE id = :id");

$sentencia->bindParam(':rol',$rol);
$sentencia->bindParam(':id',$id_user);

if($sentencia->execute()){
    echo "Se asigno el rol de manera correcta";
    ?>
    <script>location.href = "../roles/asignar.php/";</script>
    <?php
}else{
    echo "error al asignar el usuario";
}

?>