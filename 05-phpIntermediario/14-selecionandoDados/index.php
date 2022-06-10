<?php
    
    $dsn    =   "mysql:dbname=blog;host=localhost";
    $dbuser =   "safeno";
    $dbpass =   "root";

    try{

        // Iniciar PDO
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0){
            
            foreach($sql->fetchAll() as $usuario){
                echo "Nome : ".$usuario['nome']." - ".$usuario['email']."<br />";
            }


        }else{
            echo "Não há usuarios cadastrados";
        }

    }catch(PDOException $e){
        echo "Falhou : ".$e->getMessage();
    }

?>