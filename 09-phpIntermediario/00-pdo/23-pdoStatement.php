<?php 

$dsn	=	"mysql:dbname=blog;host=localhost";
$dbuser	=	"root";
$dbpass	=	"";


	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);
		
		$nome	=	"Thauanna";
		$id		=	2;
	
		$sql	=	"UPDATE usuarios SET nome = :nome WHERE id = :id";
		$sql	=	$pdo->prepare($sql);
		//bindValue
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':id', $id);
		$sql->execute();



		echo "Usuário atulizado com sucesso";
		
	}catch(PDOExeception $e){
		echo "ERRO : ".$e->getMessage();
	}

 ?>