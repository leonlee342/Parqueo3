<?php

include ('../app/config.php');


$sis_docente = $_GET['sis_docente'];
$placa = $_GET['placa'];
$marca = $_GET['marca'];
$modelo = $_GET['modelo'];
$color = $_GET['color'];

//VALIDACIONES AÑADIR VEHICULO
if(!preg_match("/^['a-zA-Z0-9']*$/",$placa)){
  echo "LA PLACA NO COINCIDE CON EL FORMATO SOLICITADO DEBE TENER EL SIGUIENTE FORMATO: 1111PPP";
  exit();
} 

if(strlen($placa)<3){
  echo "LA PLACA TENER MAS DE 3 CARACTERES";
  exit();
} 

if(!preg_match("/^['a-zA-Z-']*$/",$marca)){
  echo "LA MARCA DEL AUTO SOLO PUEDE CONTENER LETRAS";
  exit();
} 

if(!preg_match("/^['a-zA-Z-']*$/",$modelo)){
  echo "EL MOCELO DEL AUTO SOLO PUEDE CONTENER LETRAS";
  exit();
} 

if(!preg_match("/^['a-zA-Z-']*$/",$color)){
  echo "EL COLOR DEL AUTO SOLO PUEDE CONTENER LETRAS";
  exit();
} 

// opteniendo el nombre del docente de la tabla tb_vehiculos
$query_usuario = $pdo->prepare("SELECT * FROM tb_clientes WHERE estado = '1' AND sis_docente = '$sis_docente'");
$query_usuario->execute();
$usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    $nombres = $usuario['nombres'];
}




// Para obtener la fecha actual busco zona horaria en la pagina de php, pero no hay Bolivia asi que utilizare caracas
date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d h:i:s");

$estado_vehiculo = "OTRO";
$sentencia = $pdo->prepare( "INSERT INTO tb_vehiculos
                          (nombres, placa, sis_docente, marca, modelo, color, estado_vehiculo, fyh_creacion, estado)
                   VALUES (:nombres, :placa,:sis_docente,:marca ,:modelo,:color, :estado_vehiculo, :fyh_creacion, :estado)");

$sentencia->bindParam('nombres',$nombres);
$sentencia->bindParam('placa',$placa);
$sentencia->bindParam('sis_docente',$sis_docente);
$sentencia->bindParam('marca',$marca);
$sentencia->bindParam('modelo',$modelo);
$sentencia->bindParam('color',$color);
$sentencia->bindParam('estado_vehiculo',$estado_vehiculo);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_del_registro);

// utilizo script y no header para rediccionar, luego del registro porque en ajax no permite usar header
if($sentencia->execute()){
    echo "Registro satisfactorio";

    ?>
    <script>
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'SOLICITUD ENVIADA CORRECTAMENTE',
            showConfirmButton: false,
            timer: 2000
            })

        $('#resultado').html(respuesta_solicitar_vehiculo);
        $('#placa_enviar').val('');
        $('#marca_enviar').val('');
        $('#modelo_enviar').val('');
        $('#color_enviar').val('');
    /script>

<?php



}else{
    echo "no se pudo registrar a la base de datos";
} 

?>