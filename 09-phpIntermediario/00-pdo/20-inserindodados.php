<?php 

$dsn	=	"mysql:dbname=blog;host=localhost";
$dbuser	=	"root";
$dbpass	=	"";


	try{
		// instancia classe PDO
		$pdo = new PDO($dsn,$dbuser, $dbpass);

		// Inserir dados

		$nome = "UsuárioPHP 2";
		$email = "usuario2@php.com";
		$senha = md5("123");

		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha' ";
		$sql = $pdo->query($sql);

	echo "Usuário inserido : ".$pdo->lastInsertId(); 

	}catch(PDOExeception $e){
		echo "Falhou : ".$e->getMessage();
	}



?>