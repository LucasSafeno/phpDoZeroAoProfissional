<?php 

$dsn	=	"mysql:dbname=blog;host=localhost";
$dbuser	=	"root";
$dbpass	=	"";



	try{
		// instância PDO
		$pdo = new PDO($dsn, $dbuser, $dbpass);

		//deletando dados
		$sql = "DELETE FROM usuarios WHERE id = 4";
		$sql = $pdo->query($sql);

		echo "Usuário deletado";

	}catch(PDOExeception $e){

		echo "Falhou : ".$e->getMessage();
	}


?>