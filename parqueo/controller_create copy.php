<?php
include ('../app/config.php');

$nro_espacio = $_GET['nro_espacio'];
$estado_espacio = $_GET['estado_espacio'];
$obs = $_GET['obs'];

$estado = "1";

//echo $nro_espacio."-".$estado_espacio."-".$obs;

date_default_timezone_set("America/Caracas");
$fechaHora = date("Y-m-d h:i:s");



//BUSCA SI EL ESPACIO EN EL PARQUEO YA ESTA CREADO
$contador_espacio = 0;
$query_espacios = $pdo->prepare("SELECT * FROM tb_mapeos WHERE nro_espacio = '$nro_espacio' AND estado = '1' ");
$query_espacios->execute();
$datos_espacios = $query_espacios->fetchAll(PDO::FETCH_ASSOC);
foreach($datos_espacios as $datos_espacio){
    $contador_espacio = $contador_espacio + 1;   
}

if($contador_espacio == "0"){
    echo "NO HAY NINGUN REGISTRO IGUAL";

    //ESTA CONSULTA ES PARA VER SI EL ESPACIO DEL PARQUEO FUE ELIMINADO O ES NUEVO
    $contador_espacio2 = 0;
    $query_espacios2 = $pdo->prepare("SELECT * FROM tb_mapeos WHERE id_map = '$nro_espacio' AND estado = '0' ");
    $query_espacios2->execute();
    $datos_espacios2 = $query_espacios2->fetchAll(PDO::FETCH_ASSOC);
    foreach($datos_espacios2 as $datos_espacios){
        $contador_espacio2 = $contador_espacio2 + 1;   
    }

    if($contador_espacio2 == "0"){

        echo "EL ESPACIO2 ES NUEVO";

        //EL ESPACIO ES NUEVO
        $sentencia = $pdo->prepare("INSERT INTO tb_mapeos
             (nro_espacio, estado_espacio, obs, fyh_creacion, estado)
        VALUES (:nro_espacio, :estado_espacio, :obs, :fyh_creacion, :estado)");

        $sentencia->bindParam('nro_espacio',$nro_espacio); 
        $sentencia->bindParam('estado_espacio',$estado_espacio); 
        $sentencia->bindParam('obs',$obs); 
        $sentencia->bindParam('fyh_creacion',$fechaHora); 
        $sentencia->bindParam('estado',$estado_del_registro); 

        if($sentencia->execute()){
            echo "REGISTRO REALIZADO SATISFACTORIAMENTE";
            ?>
            <script>location.href = "mapeo_de_vehiculos.php"; </script> 
            <?php
        }else{
            echo "No se pudo registrar a la base de datos";
        }

    }else{

        echo "EL ESPACIO2 FUE ELIMNADO ANTERIORMENTE";

        $sentencia2 = $pdo->prepare("UPDATE tb_mapeos SET 
        nro_espacio = :nro_espacio, 
        estado_espacio = :estado_espacio,        
        fyh_actualizacion = :fyh_actualizacion,
        estado = :estado
        WHERE id_map = :id_map");

        $sentencia2->bindParam(':nro_espacio', $nro_espacio);
        $sentencia2->bindParam(':estado_espacio', $estado_espacio);        
        $sentencia2->bindParam(':fyh_actualizacion', $fechaHora);
        $sentencia2->bindParam(':estado', $estado);
        $sentencia2->bindParam(':id_map', $nro_espacio);

        if($sentencia2->execute()){
            echo "SE ACTUALIZO DE MANERA CORRECTA";
            ?>
            <script>location.href = "../parqueo/mapeo_de_vehiculos.php"; </script>
            <?php
        }else{
            echo "ERROR AL ACTUALIZAR LOS DATOS";
        }

    }


}else{    
   // echo "YA UN ESPACIO, CON EL MISMO NUMERO";
    ?>
        <div class="alert alert-danger">
        YA UN ESPACIO CREADO CON EL MISMO NUMERO DE REGISTRO
        </div>

    <?php
}








?>





