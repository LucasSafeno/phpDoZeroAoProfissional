<?php
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        
        // Pegando dados via post
        $nome   = addslashes($_POST['nome']);
        $email  = addslashes($_POST['email']);
        $msg    = addslashes($_POST['msg']);

        $para       =   "contato@atual.tech";
        $assunto    =   "Pergunta Contato";
        $corpo      =   "Nome : ".$nome." - Email : ".$email." - Mensagem : ".$msg;
        $cabecalho  =   "From: suporte@atual.tech"."\r\n".
                        "Reply-To: ".$email."\r\n".
                        "X-Mailer: PHP/".phpversion();

        mail($para, $assunto, $corpo, $cabecalho);

        echo "<h2>Email enviado com sucesso !</h2>";
        exit;

    }
?>

<form action="" method="post">
    Nome : <br>
    <input type="text" name="nome"><br>

    E-mail <br>
    <input type="email" name="email"> <br>

    Mensagem : <br>
    <textarea name="msg"></textarea> <br><br>

    <input type="submit" value="Enviar">




</form>