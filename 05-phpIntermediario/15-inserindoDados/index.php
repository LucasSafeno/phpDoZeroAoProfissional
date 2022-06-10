<?php
    
    $dsn    =   "mysql:dbname=blog;host=localhost";
    $dbuser =   "safeno";
    $dbpass =   "root";

    try{

        // Iniciar PDO
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        $nome   =   "Administrador";
        $email  =   "adm@adm.com";
        $senha  =   md5("123");
        
        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
        $sql = $pdo->query($sql);

        echo "Usuário inserido : ".$pdo->lastInsertId();

    }catch(PDOException $e){
        echo "Falhou : ".$e->getMessage();
    }

?>