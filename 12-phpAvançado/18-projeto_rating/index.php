<?php 

try{
    $pdo = new PDO("mysql:dbname=projeto_rating;host=localhost","safeno", "root");
}catch(PDOException $e){
    echo "ERRO:".$e->getMessage();
    exit;
}

$sql = "SELECT * FROM filmes";
$sql = $pdo->query($sql);

    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $filmes):
        ?>
    <fieldset>
            <strong><?php echo $filmes['titulo']; ?></strong> <br>
<a href="votar.php?id=<?php echo $filmes['id'];?>&voto=1"> <img src="star.png" height="20"></a>
<a href="votar.php?id=<?php echo $filmes['id'];?>&voto=2"> <img src="star.png" height="20"></a>
<a href="votar.php?id=<?php echo $filmes['id'];?>&voto=3"> <img src="star.png" height="20"></a>
<a href="votar.php?id=<?php echo $filmes['id'];?>&voto=4"> <img src="star.png" height="20"></a>
<a href="votar.php?id=<?php echo $filmes['id'];?>&voto=5"> <img src="star.png" height="20"></a>
            ( <?php echo $filmes['media'] ?> )
    </fieldset>
    <?php
        endforeach;
    }else{
        echo "Não há Filmes cadastrados";
    }

?>