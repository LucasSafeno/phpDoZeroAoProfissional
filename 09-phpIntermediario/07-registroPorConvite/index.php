<?php 
require "config.php";
	// Inicia Sessão
	session_start();

$email = '';
$codigo = '';
	if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
		$id = $_SESSION['id'];
			$sql = "SELECT * FROM usuarios WHERE id = '$id' ";
			$sql = $pdo->query($sql);
			if($sql->rowCount() > 0){
				$dado = $sql->fetch();
				$email = $dado['email'];
				$codigo = $dado['codigo'];

			}
	}else{
		header("Location: login.php");
	}

 ?>

 <h1>Área interna do sistema</h1>
 <p>Usuario : <?php echo $email; ?> -  <a href="deslogar.php">Sair</a></p>
 <p>Link: http://localhost/phpDoZeroAoProfissional/09-phpIntermediario/07-registroPorConvite/cadastrar.php?codigo=<?php echo $codigo ?></p>