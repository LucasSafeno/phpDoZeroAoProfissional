<?php 

try{

    $pdo = new PDO("mysql:dbname=projeto_loginunico;host=localhost","safeno", "root");

}catch(PDOException $e){
    echo "ERROR :".$e->getMessage();
    exit;
}


?>