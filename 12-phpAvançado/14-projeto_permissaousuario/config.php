<?php 
try{
    $pdo = new PDO("mysql:dbname=projeto_permissaousuario", "safeno", "root");
}catch(PDOException $e){
    echo "Falhou : ".$e->getMessage();
}

?>