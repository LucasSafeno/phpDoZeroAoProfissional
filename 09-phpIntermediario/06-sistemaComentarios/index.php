<?php 

	try{
		$pdo =  new PDO("mysql:dbname=projeto_comentarios;host=127.0.0.1", "root", "root");
	}catch(PDOExeception $e){
		echo "Falhou : ".$e->getMessage();
	}


	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$nome = addslashes($_POST['nome']);
		$mensagem = addslashes($_POST['mensagem']);

		$sql = $pdo->prepare("INSERT INTO mensagens  SET nome = :nome, msg = :msg, data_msg = NOW()");
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":msg", $mensagem);
		$sql->execute();
	}




 ?>

<fieldset>
	<form  method="post">
		Nome: <br>
		<input type="text" name="nome"><br><br>

		Mensagem: <br>
		<textarea name="mensagem"></textarea> <br> <br>

		<input type="submit" value="Enviar Mensagem">
	</form>
</fieldset>
<br><br><br>

<?php 
	$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0){
		foreach($sql->fetchAll() as $mensagem):
			?>
				<strong><?php echo $mensagem['nome']; ?>  </strong>- <small> <?php echo $mensagem['data_msg']; ?></small><br>
				<?php echo $mensagem['msg']; ?>
				<hr>
			<?php
		endforeach;
	}else{
		echo "Não há mensagens";
	}

 ?>


