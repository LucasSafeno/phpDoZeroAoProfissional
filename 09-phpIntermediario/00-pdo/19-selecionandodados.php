<?php 

$dsn	=	"mysql:dbname=blog;host=localhost";
$dbuser	=	"root";
$dbpass	=	"";


	try{
		// instancia classe PDO
		$pdo = new PDO($dsn,$dbuser, $dbpass);

		$sql = "SELECT * FROM usuarios";
		$sql = $pdo->query($sql);


		// verica se há dados
		if($sql->rowCount() > 0){
			// quando há vários resultados. Retorna um array usa o foreach com fetchAll

			foreach($sql->fetchAll()as $usuario){
				echo "Nome : ".$usuario['nome']." - ".$usuario['email']."<br>";

			}
		}else{
			echo "Não há usuários cadastrados";
		}


	}catch(PDOExeception $e){
		echo "Falhou : ".$e->getMessage();
	}



?>