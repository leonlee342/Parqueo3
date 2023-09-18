<?php

include ('../app/config.php');

$sis_docente = $_GET['sis_docente'];

$asunto_reclamo = $_GET['asunto_reclamo'];
$redactar_reclamo = $_GET['redactar_reclamo'];

date_default_timezone_set("America/Caracas");
$fechaHora = date(format: "Y-m-d h:i:s");

$query_clientes = $pdo->prepare("SELECT * FROM tb_clientes WHERE sis_docente = '$sis_docente' AND estado = '1' ");
$query_clientes->execute();
$datos_clientes = $query_clientes->fetchAll(PDO::FETCH_ASSOC);
foreach($datos_clientes as $datos_cliente){  
    $nombres = $datos_cliente['nombres'];
}  


$sentencia = $pdo->prepare( "INSERT INTO tb_realizar_reclamo
(sis_docente, nombre_docente, asunto_reclamo, redactar_reclamo, fyh_creacion, estado)
VALUES (:sis_docente,:nombre_docente,:asunto_reclamo,:redactar_reclamo,:fyh_creacion, :estado)");

$sentencia->bindParam('sis_docente',$sis_docente);
$sentencia->bindParam('nombre_docente',$nombres);
$sentencia->bindParam('asunto_reclamo',$asunto_reclamo);
$sentencia->bindParam('redactar_reclamo',$redactar_reclamo);
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
        title: 'Reclamo enviado exitosamente exitosamente',
        showConfirmButton: false,
        timer: 2000
        })
</script>

<!-- <script>location.href= "perfil_usuario.php"</script>  -->
<?php    
}else{
echo "no se pudo registrar a la base de datos";
} 