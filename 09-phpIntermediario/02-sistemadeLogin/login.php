<?php 
	//Iniciar sessão
	session_start();

	if(isset($_POST['email']) && !empty($_POST['email'])){
		$email	=	addslashes($_POST['email']);
		$senha	=	md5(addslashes($_POST['senha']));


		// Conexão banco de dados
		$dsn	=	"mysql:dbname=blog;host=localhost";
		$dbuser	=	"root";
		$dbpass	=	"";

		try{
			$db	=	new PDO($dsn, $dbuser, $dbpass);


			$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ");

			if($sql->rowCount() > 0 ){
				$dado = $sql->fetch();

				$_SESSION['id'] = $dado['id'];

				header("Location: index.php");
			}

		}catch(PDOExeception $e){
			echo "FALHOU :".$e->getMessage();
		}
	}


 ?>


Página de Login

<form method="POST">
	
	E-Mail : <br>
	<input type="email" name="email"> <br><br>

	Senha : <br>
	<input type="password" name="senha"> <br><br>

	<input type="submit" value="Entrar">



</form>