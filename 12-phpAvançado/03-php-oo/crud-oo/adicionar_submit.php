<?php
include "contato.class.php";
$contato = new Contato();

    if(!empty($_POST['nome'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $contato->adicionar($nome, $email);

        header("Location: index.php");
    }