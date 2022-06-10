<?php
/*
$nomes = array(
    array("nome" => "Lucas", "idade" => 27),
    array("nome" => "Thauanna", "idade" => 21),
    array("nome" => "fulano", "idade" => 26),
    array("nome" => "cicrano", "idade" => 125)
);

    foreach($nomes as $aluno){
        echo "Aluno : ".$aluno['nome']." - Idade : ".$aluno['idade']."<br />";
    }
*/

$aluno = array(
    "nome" => "Lucas",
    "idade" => 27,
    "estado" => "PE",
    "pais" => "Brasil"
);

    foreach($aluno as $chave => $dado){
        echo $chave." = ".$dado. "<br />";
    }


?>