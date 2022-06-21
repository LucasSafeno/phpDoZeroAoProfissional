<?php 

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

	try{
		$pdo = new PDO($dsn, $dbuser, $dbpass);

		// Atualizando dados
		$sql = "UPDATE usuarios SET email = 'update@update.com' WHERE email = 'lucas@teste.com'  ";
		$sql = $pdo->query($sql);

		echo "Usuário alterado com sucesso.";

	}catch(PDOExeption $e){
		echo "Falhou :".$e->getMessage();
	}


?>