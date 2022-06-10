<?php 

    $dsn    = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "root";

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);
    }catch(PDOExeception $e){
        die($e->getMessage());
    }


    $total = 0;
    $sql = "SELECT COUNT(*) as c FROM posts";
    $sql = $pdo->query($sql);
    $sql = $sql->fetch();
    $total = $sql['c'];

    $paginas = $total / 10;

    $pg = 1;
    if(isset($_GET['p']) && !empty($_GET['p'])){
        $pg = addslashes($_GET['p']);
    }

    $p = ($pg - 1) * 10;

    $sql = "SELECT * FROM posts LIMIT $p, 10";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $item){
            echo $item['id']. " - ".$item['titulo']."<br>";
        }
    }

    echo "<hr>";

    for($q=0;$q<$paginas; $q++){
        echo '<a href="./?p='.($q+1).'">['.($q+1).']</a>';
    }


?>