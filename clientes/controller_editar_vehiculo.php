<?php

include('../app/config.php');

$placa = $_GET['placa'];
$marca = $_GET['marca'];
$modelo = $_GET['modelo'];
$color = $_GET['color'];
$sis_docente = $_GET['sis_docente2'];
$nombres = $_GET['nombre2'];


//VALIDAR CAMPOS
if(!preg_match("/^['a-zA-Z-' ]*$/",$marca)){
    echo "* LA MARCA DEBE CONTENER SOLO LETRAS";
    exit();
  } 
  
  if(strlen($marca)>10){
    echo "LA MARCA DEBE SER MENOR A 10 CARACTERES";
    exit();
  } 

  if(!preg_match("/^['a-zA-Z-' ]*$/",$modelo)){
    echo "*EL MODELO DEBE CONTENER SOLO LETRAS";
    exit();
  } 

  if(strlen($modelo)>10){
    echo "EL MODELO DEBE SER MENOR A 10 CARACTERES";
    exit();
  }

  if(!preg_match("/^['a-zA-Z-' ]*$/",$color)){
    echo "*EL COLOR DEBE CONTENER SOLO LETRAS";
    exit();
  } 

  if(strlen($color)>10){
    echo "EL COLOR DEBE SER MENOR A 10 CARACTERES";
    exit();
  }

// Se coloca caracas porque no existe en php zona horaria para Bolivia
date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");
//echo $nombres."-".$email."-".$password_user;




//BUSCA LA PLACA SI EXISTE EN tb_vehiculos
$contador = "0";
$query_buscars = $pdo->prepare("SELECT * FROM tb_vehiculos WHERE estado = '1' AND placa = '$placa' ");
$query_buscars->execute();
$buscars = $query_buscars->fetchAll(PDO::FETCH_ASSOC);
foreach($buscars as $buscar){
    $contador = $contador + 1 ;        
}


    if ($contador == "0"){
       // echo "NO EXISTE REGISTRO DE ESTE VEHICULO";

        $sentencia1 = $pdo->prepare('INSERT INTO tb_vehiculos
        (nombres,placa,sis_docente, marca, modelo, color, fyh_creacion, estado)
        VALUES ( :nombres,:placa,:sis_docente,:marca,:modelo, :color, :fyh_creacion,:estado)');

        $sentencia1->bindParam(':nombres',$nombres);
        $sentencia1->bindParam(':placa',$placa);
        $sentencia1->bindParam(':sis_docente',$sis_docente);
        $sentencia1->bindParam(':marca',$marca);
        $sentencia1->bindParam(':modelo',$modelo);
        $sentencia1->bindParam(':color',$color);
        $sentencia1->bindParam('fyh_creacion',$fechaHora);
        $sentencia1->bindParam('estado',$estado_del_registro);

        if($sentencia1->execute()){
        echo 'success';
        //header('Location:' .$URL.'/');
        ?>
        <script>location.href = "../clientes/create_vehiculo.php";</script>
        <?php
        }else{
        echo 'error al registrar a la base de datos';
        }


    }else{
        //echo "SI EXISTE REGISTRO DE ESTE VEHICULO";

        $sentencia = $pdo->prepare("UPDATE tb_vehiculos SET
        placa = :placa,
        marca = :marca,
        modelo = :modelo,
        color = :color,
        fyh_actualizacion = :fyh_actualizacion 
        WHERE sis_docente = :sis_docente");
        
        $sentencia->bindParam(':placa',$placa);
        $sentencia->bindParam(':marca',$marca);
        $sentencia->bindParam(':modelo',$modelo);
        $sentencia->bindParam(':color',$color);
        $sentencia->bindParam(':fyh_actualizacion',$fechaHora);
        $sentencia->bindParam(':sis_docente',$sis_docente);
        
        if($sentencia->execute()){
            echo "se actualizo el registro de la manera correcta";
            ?>
            <script>location.href = "../clientes/create_vehiculo.php";</script>
            <?php
        }else{
            echo "error al actualizar el registro";
        }


    }



   