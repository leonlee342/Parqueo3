<?php

include('../app/config.php');

include('../app/templeates/Mailer/src/PHPMailer.php');
include('../app/templeates/Mailer/src/SMTP.php');
include('../app/templeates/Mailer/src/Exception.php');

try{


    $emailTo = $_POST['correo'];
    $subject = $_POST['asunto'];
    $bodyEmail = $_POST['mensaje'];

    $fromemail = "carini_ewcg@hotmail.com";
    $fromname = "Gleaksoft";
    $host = "SMTP.Office365.com";
    $port = "587"; //465 si no permite enviar
    $SMTPAuth = "login";
    $SMTPSecure = "tls";
    $password = "Temporal55"; // contraseña del correo configurado

    $mail =new PHPMailer\PHPMailer\PHPMailer();

    //Tell PHPmailer to use SMTP
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = $host;
    $mail->Port = $port;
    $mail->SMTPAuth = $SMTPAuth;// indefinida variable
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username = $fromemail;
    $mail->Password = $password;

    $mail->setFrom($fromemail, $fromname);
    $mail->addAddress($emailTo);

    //recipientes las personas que se les enviara el correo
/*     if(is_array($emailTo)){
        foreach($emailTo as $key => $value){
            $mail->addAddress($value);
        }
    }else{
        $email->addAddress($emailTo);
    } */

    //asunto
    $mail->isHTML(true);
    $mail->Subject = $subject;
    //cuerpo email
    $mail->Body = $bodyEmail;

    if(!$mail->send()){
        echo "No se envio"; die();
        //error_log("MAILER: No se pudo enviar el correo! ", 0);
    }
    echo "Correo enviado con exito"; die();


}catch(Exception $e){

}




?>