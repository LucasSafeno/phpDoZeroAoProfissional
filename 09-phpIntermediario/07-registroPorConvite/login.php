<?php 	
	// Inicia SEssão
	session_start();
		require 'config.php';
 ?>
<h1>Página de Login</h1>

<form  method="post">
	E-mail: <br>
	<input type="email" name="email"><br><br>

	Senha: <br>
	<input type="password" name="senha"><br><br>

	<input type="submit" value="Entrar"><a href="cadastrar.php">Cadastrar</a>
</form>

<?php
		if(isset($_POST['email']) && !empty($_POST['email'])){
				$email = addslashes($_POST['email']);
				$senha = md5(addslashes($_POST['senha']));

				$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha '";
				$sql = $pdo->query($sql);
				if($sql->rowCount() > 0){
					$dado = $sql->fetch();

					$_SESSION['id'] = $dado['id'];
					
					 header("Location: index.php");
				}else{
					echo "Usuário não encontrado";
				}

		}

 ?>