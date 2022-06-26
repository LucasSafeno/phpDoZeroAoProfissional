<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculadora - Exercicio</title>
</head>
<body>
	

	<form  method="post">
		<input type="text" name="n1">
		<select name="operacao">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="text" name="n2">
		<input type="submit" value="Calcular">
	</form>

	<?php 	

	if(isset($_POST['operacao']) && !empty($_POST['operacao'])){
		if(!empty($_POST['n1']) && !empty($_POST['n2'])){

			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			$op = $_POST['operacao'];

			switch($op){
				case "+":
					$resul = $n1 + $n2;
					echo "Resultado : ".$resul;
					break;
				case "-":
					$resul = $n1 - $n2;
					echo "Resultado : ".$resul;
					break;
				case "*":
					$resul = $n1 * $n2;
					echo "Resultado : ".$resul;
					break;
				case "/":
					$resul = $n1 / $n2;
					echo "Resultado : ".$resul;
					break;

				default:
					echo "Operação inválida!";

			}


		}else{
			echo "Escolha dois numeros e uma operação!";
		}
	}else{
		echo "Escolha dois numeros e uma operação!";
	}


	 ?>

</body>
</html>