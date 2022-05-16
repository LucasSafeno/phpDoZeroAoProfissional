<?php
    if(isset($_POST['email']) && empty($_POST['email']) == false){

        if(isset($_POST['senha']) && empty($_POST['senha']) == false){
            $senha = $_POST['senha'];
            $email = $_POST['email']; 

            echo "Meu email é ".$email. " e minha senha é ".$senha;
        }
    }
?>
<hr>
<form method="POST">
    E-mail <br>
    <input type="text" name="email"><br>

    Senha <br>
    <input type="password" name="senha"><br>

    <input type="submit" value="Enviar dados">
</form>