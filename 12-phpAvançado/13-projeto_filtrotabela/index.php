<?php 
        try{
            $pdo = new PDO("mysql:dbname=projeto_filtrotabela;host=localhost","safeno", "root");
        }catch(PDOException $e){
            echo "Falhou : ".$e->getMessage();
        }
        if(isset($_POST['sexo']) && $_POST['sexo'] != ''){
            $sexo = $_POST['sexo'];

            $sql = "SELECT * FROM usuarios WHERE sexo = :sexo";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":sexo",$sexo);
            $sql->execute();
        }else{
            $sexo = '';
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->query($sql);
        }
?>

<form method="post">
    <select name="sexo">
        <option></option>
        <option value="0" <?php echo($sexo=='0')?'selected="selected"': ''; ?>>Masculino</option>
        <option value="1" <?php echo($sexo=='1')?'selected="selected"': ''; ?>>Feminino</option>
    </select>
    <input type="submit" value="Filtrar">
</form>


<table border="1" width="100%">
    <tr>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Idade</th>
    </tr>
        <?php 

            $sexos = array(
                '0' => 'Masculino',
                '1' => 'Feminino'
            );

            
            if($sql->rowCount() > 0){
                foreach($sql->fetchAll() as $item):
                    ?>
                    <tr>
                        <td><?php echo $item['nome']; ?></td>
                        <td><?php echo $sexos[$item['sexo']]; ?></td>
                        <td><?php echo $item['idade']; ?></td>    
                    </tr>
                    <?php endforeach;
                }        
        ?>
</table>