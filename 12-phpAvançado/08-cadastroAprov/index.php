<?php 
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['nome']);

    require "config.php";

    $pdo->query("INSERT INTO usuarios SET nome= '$nome', email = '$email'");
    $id = $pdo->lastInsertId(); //pegar ultimo ID cadastrado

    $md5 = md5($id); // get hash com id do usuário

    $link = 'https://safeno.eurostress.online/cadastroconfirma/confirmar.php?h='.$md5;

    $assunto = "Confirme seu cadastro";
    $msg = "Clique no link abaixo para confirmar seu cadastro: \n\n".$link;
    $headers = "From: lucassafeno@euroestress.online"."\r\n.".
                "X-Mailer: PHP/".phpversion();
    
    mail($email, $assunto,$msg, $headers);


    echo "<h2>Confirme seu cadastro agora </h2>";
    exit;

}



?>
<form method="POST">
    Nome: <br>
    <input type="text" name="nome"><br> <br>

    E-Mail <br>
    <input type="email" name="email"> <br> <br>

    <input type="submit" value="Cadastrar">
</form>