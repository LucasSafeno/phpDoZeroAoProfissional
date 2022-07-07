<?php 
session_start();
require "config.php";
require "classes/usuarios.class.php";


    if(!empty($_POST['email'])){
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        $usuarios = new Usuarios($pdo);

        if($usuarios->fazerLogin($email, $senha)){
            header("Location: index.php");
        }else{
            echo "Usuário e/ou senha errado!";
        }
    }


?>
<h1>Login:</h1>
<form action="" method="post">
    Email: <br>
    <input type="email" name="email" id=""> <br> <br>

    Senha: <br>
    <input type="password" name="senha" id=""> <br> <br>

    <input type="submit" value="Entrar">
</form>