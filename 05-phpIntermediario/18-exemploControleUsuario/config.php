<?php
$dsn    =   "mysql:dbname=blog;host=localhost";
$dbuser =   "safeno";
$dbpass =   "root";


    try{

        $pdo = new PDO($dsn, $dbuser, $dbpass);


    }catch(PDOExeception $e){
        echo "Falhou conexão".$e->getMessage();
    }


?>