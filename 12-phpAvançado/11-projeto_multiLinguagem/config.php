<?php 
    try{
        global $pdo;
        $pdo = new PDO("mysql:dbname=projeto_multlinguagem;host=localhost", "safeno", "root");

    }catch(PDOException $e){
        die($e->getMessage());
    }

?>