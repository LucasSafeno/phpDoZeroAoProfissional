<?php 
	session_start();
	require "config.php";
echo $_SESSION['banco']; 
	if(isset($_POST['tipo'])){
		$tipo = $_POST['tipo'];
		$valor = str_replace(",", ".",$_POST['valor']);
		$valor = floatval($valor);

		$sql = $pdo->prepare("INSERT INTO historico (id_conta, tipo, valor,data_operacao)
											 VALUES (:id_conta, :tipo, :valor, NOW()) ");
		$sql->bindValue(":id_conta", $_SESSION['banco']);
		$sql->bindValue(":tipo", $tipo);
		$sql->bindValue(":valor", $valor);
		$sql->execute();

		if($tipo == '0'){
			// deposito
			$sql = $pdo->prepare("UPDATE contas set saldo = saldo + :valor WHERE id = :id");
			$sql->bindValue(":valor", $valor);
			$sql->bindValue(":id", $_SESSION['banco']);
			$sql->execute();
		}else{
			//retirada
			$sql = $pdo->prepare("UPDATE contas set saldo = saldo - :valor WHERE id = :id");
			$sql->bindValue(":valor", $valor);
			$sql->bindValue(":id", $_SESSION['banco']);
			$sql->execute();
		}


		header("Location: index.php");
		exit;
	}

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - Caixa Eletrônico online - PHP Do Zero ao Profissional  </title>
</head>
<body>
	 <form  method="post">
		Tipo de Transação: <br>
		<select name="tipo">
			<option value="0">Depósito</option>
			<option value="1">Retirada</option>

		</select> <br> <br>
		 Valor: <br>

		 <input type="text" name="valor" pattern="[0-9.,]{1,}"> <br> <br>

		 <input type="submit" value="Adicionar">

	</form>


</body>
</html> 

