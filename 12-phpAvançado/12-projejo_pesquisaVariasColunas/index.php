<h1>Digite Email ou CPF do usuário</h1>
<form  method="GET">
    <input type="text" name="campo"> <br> <br>
    <input type="submit" value="Pesquisar">
</form>

<hr>

<?php 
    if(!empty($_GET['campo'])){
        $campo = $_GET['campo'];

        try{
            $pdo = new PDO("mysql:dbname=projeto_pesqvariascolunas;host=localhost", "safeno", "root");   

        }catch(PDOException $e){
            echo "Falhou".$e->getMessage();
        }


        $sql = "SELECT * FROM usuarios WHERE (email = :email) OR (cpf = :cpf)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email", $campo);
        $sql->bindValue(":cpf", $campo);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            echo "Olá ".$dado['nome']."<br>";
            echo "CPF : ".$dado['cpf']."<br>";
            echo "Email : ".$dado['email'];
        }else{
            echo "Usuário não encontrado";
        }


    }

?>