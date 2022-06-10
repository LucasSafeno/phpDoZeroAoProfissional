<?php
    session_start();

    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email  =   addslashes($_POST['email']);
        $senha  =   md5(addslashes($_POST['senha']));

        $dsn    =   "mysql:dbname=blog;host=localhost";
        $dbuser =   "safeno";
        $dbpass=    "root";

        try{
            $db = new PDO($dsn, $dbuser, $dbpass);

            $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ");

            # rowCount retorna quantidade de linhas da query
            if($sql->rowCount() > 0){
             
                $dado = $sql->fetch(); // armazena um unico valor da query

                $_SESSION['id'] = $dado['id']; 

                header("Location: index.php");
            }


        }catch(PDOException $e){
            echo "Falhou : ".$e->getMessage();
        }
    }

?>

<form method="post">

    E-mail : <br>
    <input type="email" name="email"> <br>

    Senha : <br>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Entrar">


</form>