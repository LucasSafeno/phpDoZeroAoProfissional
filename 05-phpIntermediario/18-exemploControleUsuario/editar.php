<?php
require 'config.php';
$id = 0;

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = addslashes($_GET['id']);

    }

    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome   = addslashes($_POST['nome']);
        $email  = addslashes($_POST['email']);
        $senha  = md5(addslashes($_POST['senha']));

        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id' ";
        $pdo->query($sql);
        header("Location: index.php");
    }


  
        $sql = "SELECT * FROM usuarios WHERE id = '$id' ";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
        }else{
            header("Location: index.php");
        }

?>


<form method="post">
    Nome : <br>
    <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"><br>

    E-mail : <br>
    <input type="email" name="email" value="<?php echo $dado['email']; ?>"><br>

    Senha : <br>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Atualizar">


</form>