<?php

include ('../app/config.php');

$sis_docente = $_GET['sis_docente'];

$nro_espacio = "10";
$nombre_usuario = $_GET['usuario_compatido'];
$placa = $_GET['placa_compartido'];
$fecha_inicio = $_GET['fecha_compartido'];
$hora_inicio = $_GET['hora_inicio'];
$hora_final = $_GET['hora_final'];

date_default_timezone_set("America/Caracas");
$fechaHora = date(format: "Y-m-d h:i:s");

$query_clientes = $pdo->prepare("SELECT * FROM tb_clientes WHERE sis_docente = '$sis_docente' AND estado = '1' ");
$query_clientes->execute();
$datos_clientes = $query_clientes->fetchAll(PDO::FETCH_ASSOC);
foreach($datos_clientes as $datos_cliente){  
    $nombres = $datos_cliente['nombres'];
}  


$sentencia = $pdo->prepare( "INSERT INTO tb_solicitud_compartido
(sis_docente, propietario, nro_espacio, nombre_usuario, placa, fecha_inicio, hora_inicio, hora_final, fyh_creacion, estado)
VALUES (:sis_docente,:propietario,:nro_espacio,:nombre_usuario,:placa ,:fecha_inicio,:hora_inicio, :hora_final, :fyh_creacion, :estado)");

$sentencia->bindParam('sis_docente',$sis_docente);
$sentencia->bindParam('propietario',$nombres);
$sentencia->bindParam('nro_espacio',$nro_espacio);
$sentencia->bindParam('nombre_usuario',$nombre_usuario);
$sentencia->bindParam('placa',$placa);
$sentencia->bindParam('fecha_inicio',$fecha_inicio);
$sentencia->bindParam('hora_inicio',$hora_inicio);
$sentencia->bindParam('hora_final',$hora_final);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_del_registro);

// utilizo script y no header para rediccionar, luego del registro porque en ajax no permite usar header
if($sentencia->execute()){
echo "Registro satisfactorio";

//header('index.php');
?>
<!-- <script>alert ('REGISTRO ENVIADO');</script>  -->


<script>
Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'La solicitud fue enviada exitosamente',
        showConfirmButton: false,
        timer: 2000
        })
</script>

<!-- <script>location.href= "perfil_usuario.php"</script>  -->
<?php    
}else{
echo "no se pudo registrar a la base de datos";
} 