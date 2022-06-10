<?php
    
    $dsn    =   "mysql:dbname=blog;host=localhost";
    $dbuser =   "safeno";
    $dbpass =   "root";

    try{

        // Iniciar PDO
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        $sql = "DELETE FROM usuarios WHERE id = 7";
        $pdo->query($sql);

        echo "Usuário deletado";

    }catch(PDOException $e){
        echo "Falhou : ".$e->getMessage();
    }

?>