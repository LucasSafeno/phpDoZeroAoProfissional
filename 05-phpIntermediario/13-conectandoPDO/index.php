<?php
    
    $dsn    =   "mysql:dbname=blog;host=localhost";
    $dbuser =   "safeno";
    $dbpass =   "root";

    try{

        // Iniciar PDO
        $pdo = new PDO($dsn, $dbuser, $dbpass);

    }catch(PDOException $e){
        echo "Falhou : ".$e->getMessage();
    }

?>