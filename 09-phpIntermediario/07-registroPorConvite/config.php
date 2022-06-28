<?php 	

		try{
			$pdo = new PDO("mysql:dbname=projeto_registroconvite;host=localhost", "root","root");
			

		}catch(PDOException $e){
			echo "Falha :".$e->getMessage();
		}



 ?>