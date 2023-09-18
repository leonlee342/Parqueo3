<?php

include ('../app/config.php');

$sis_docente = $_GET['sis_docente'];
$placa = $_GET['placa_enviar'];
$marca = $_GET['marca_enviar'];
$modelo = $_GET['modelo_enviar'];
$color = $_GET['color_enviar'];

//VALIDACIONES DE CAMPOS
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


// Para obtener la fecha actual busco zona horaria en la pagina de php, pero no hay Bolivia asi que utilizare caracas
date_default_timezone_set("America/Caracas");
// $fechaHora = date(format: "Y-m-d h:i:s");
$fechaHora = date("Y-m-d h:i:s");


//RECUPERANDO LOS DATOS DEL DOCENTE
$query_docente = $pdo->prepare("SELECT * FROM tb_clientes WHERE sis_docente = '$sis_docente' AND estado = '1' ");
$query_docente->execute();
$docentes = $query_docente->fetchAll(PDO::FETCH_ASSOC);
foreach($docentes as $docente){
    $id = $docente['id'];
    $nombres = $docente['nombres'];
    $ci = $docente['ci'];                
}


//ESTA PARTE BUSCA SI HAY UN REGISTRO REPETIDO
$contador_buscar = 0;
$query_buscar = $pdo->prepare("SELECT * FROM tb_solicitud_vehiculo WHERE placa = '$placa' AND estado = '1' ");
$query_buscar->execute();
$datos_buscars = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
foreach($datos_buscars as $datos_buscar){
    $contador_buscar = $contador_buscar + 1;   
}

if($contador_buscar == "0"){
   // echo "No hay una solicitud de registro inicial";

// ****INICIO ENVIO DE SOLICITUD****
            $estado_vehiculo = "TITULAR";
            $sentencia = $pdo->prepare( "INSERT INTO tb_solicitud_vehiculo
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
                
                //header('index.php');

                // <script>alert ('REGISTRO ENVIADO');</script> 
                // <script>location.href= "perfil_usuario.php"</script> 

                   
            }else{
                echo "no se pudo registrar a la base de datos";
            } 

            // ESTA PARTE ESTA REGISTRANDO LOS DATOS DEL VEHICULO EN tb_vehiculos
            $sentencia2 = $pdo->prepare( "INSERT INTO tb_vehiculos
                                    (nombres, placa, sis_docente, marca, modelo, color, fyh_creacion, estado)
                            VALUES (:nombres, :placa,:sis_docente,:marca ,:modelo,:color, :fyh_creacion, :estado)");

            $sentencia2->bindParam('nombres',$nombres);
            $sentencia2->bindParam('placa',$placa);
            $sentencia2->bindParam('sis_docente',$sis_docente);
            $sentencia2->bindParam('marca',$marca);
            $sentencia2->bindParam('modelo',$modelo);
            $sentencia2->bindParam('color',$color);
            $sentencia2->bindParam('fyh_creacion',$fechaHora);
            $sentencia2->bindParam('estado',$estado_del_registro);

            if($sentencia2->execute()){
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

                $('#resultado').html(respuesta);
                $('#placa').val('');
                $('#marca').val('');
                $('#modelo').val('');
                $('#color').val('');
            </script>
            <?php
                
            }else{
                echo "no se pudo registrar a la base de datos";
            } 

// ****FIN ENVIO DE SOLICITUD****

}else{
    //echo "YA EXISTE UNA SOLICITUD DE PARQUEO PREVIA";
    ?>
        <div class="alert alert-danger">
            YA EXISTE UNA SOLICITUD DE PARQUEO PREVIA
        </div>
    <?php
}



?>
