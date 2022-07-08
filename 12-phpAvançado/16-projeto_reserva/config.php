<?php 
try{
    $pdo = new PDO("mysql:dbname=projeto_reserva;host=localhost","safeno","root");
}catch(PDOException $e){
    echo "ERRO : ".$e->getMessage();
    exit;
}

?>