<?php 
require "config.php";

    if(!empty($_POST['email'])){
        $email = $_POST['email'];

        $sql = "SELECT * FROM usuarios WHERE email = :email ";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();


        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            $id = $sql['id'];

            $token = md5(time().rand(0,99999).rand(0,99999));

            $sql = "INSERT INTO usuarios_token (id_usuario, hash, expira_en ) VALUES (:id_usuario, :hash, :expira_en)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":id_usuario", $id);
            $sql->bindValue(":hash", $token);
            $sql->bindValue(":expira_en", date('Y-m-d H:i', strtotime('+2 months')));
            $sql->execute();


            $link = "http://localhost/phpDoZeroAoProfissional/12-phpAvançado/09-esqueciMinhaSenha/redefinir.php?token=".$token;
            $mensagem = "Clique no link para redifinir sua senha : ".$link;
            $assunto = "Redefinir senha : ";
            

            $headers = "From: email@email.com \r\n"."X-Mailer: PHP/".phpversion();

            //mail($email, $assunto, $mensagem, $headers);

            echo $mensagem;
            exit;
        }
    }


?>

<form  method="post">
    Qual seu Email : <br>
    <input type="email" name="email"> <br> <br>

    <input type="submit" value="Enviar">
</form>