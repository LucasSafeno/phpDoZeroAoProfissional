<?php
    session_start();  // inicia sessão

    # Verifica se há dado salvo
    # Se existir e não estiver vazia
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        echo "Área restrita <br />";
        echo "<a href='deslogar.php'>Deslgoar </a>";
    }else{
        header("Location: login.php"); // redireciona para página de login, caso não haja sessão
    }
?>