<?php 

	try{
		$pdo = new PDO("mysql:dbname=projeto_caixaeletronico;host=localhost", "root", "root");
	}catch(PDOExeception $e){
		echo "Falhou".$e->getMessage();
		exit;
	}


 ?>