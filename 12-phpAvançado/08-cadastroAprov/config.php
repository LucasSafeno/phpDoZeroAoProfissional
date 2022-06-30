<?php 

try{
    $dsn = "mysql:dbname=usuarios;host=localhost";
    $dbuser = "root";
    $dbpass = "root";
    
    $pdo = new PDO($dsn,$dbuser, $dbpass);
}catch(PDOException $e){
    die($e->getMessage());
}

?>