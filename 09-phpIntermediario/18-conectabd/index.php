<?php 

$dsn	=	"mysql:dbname=blog;host=localhost";
$dbuser	=	"root";
$dbpass	=	"";


	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);
		
	}catch(PDOExeception $e){
		echo "ERRO : ".$e->getMessage();
	}

 ?>