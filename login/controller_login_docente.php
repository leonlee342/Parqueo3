<?php

include('../app/config.php');

session_start();

$usuario_user_docente = $_POST['docente'];
$password_user_docente = $_POST['password_docente'];

//echo $usuario_user_docente."-".$password_user_docente;

$email_table_docente = ''; $password_tabla_docente ='';

$query_login_docente = $pdo->prepare("SELECT * FROM tb_clientes WHERE email = '$usuario_user_docente' AND password_docente = '$password_user_docente' AND estado = '1'");
$query_login_docente->execute();
$docentes = $query_login_docente->fetchAll(PDO::FETCH_ASSOC);
foreach ($docentes as $docente){
    $email_table_docente = $docente ['email'];
    $password_tabla_docente = $docente['password_docente'];
    $id_user_docente = $docente ['id'];
}

if(($usuario_user_docente == $email_table_docente) && ($password_user_docente ==  $password_tabla_docente)){
    ?>
    <div class="alert alert-success" role="alert">
            Usuario Correcto
    </div>
    <script>location.href= "perfil_usuario.php?id=<?php echo$id_user_docente;?>";</script> 
    <?php
    
    //en eta variable se esta almacennado el usuario que va a ingresar al sistema
    $_SESSION['usuario_sesion'] = $email_table_docente;
}else{
    ?>
    <div class="alert alert-danger" role="alert">
            Error al introducir sus datos
    </div>
     <!-- jquery password que la propiedad sea nulo si se equivoca en su contraseña -->
     <script>$('#password_docente').val("");$('#password_docente').focus();</script> 
<?php
}

