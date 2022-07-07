<?php 
session_start();
    if(!isset($_SESSION['captcha'])){
        $n = rand(1000,9999);
        $_SESSION['captcha'] = $n;
    }



?>

<img src="imagem.php" width="100" height="50">
<form method="post"><br>
    <input type="text" name="codigo"> <br> <br>
    <input type="submit" value="Verificar">
</form>

<?php 


if(!empty($_POST['codigo'])){
    $codigo = $_POST['codigo'];

    if($codigo == $_SESSION['captcha']){
        echo "ACERTOU <br>";
    }else{
        echo "Errou <br>";
    }

    $n = rand(1000,9999);
    $_SESSION['captcha'] = $n;
}

?>