<?php 
    require 'banco.php';


    $banco = new Banco("localhost", "blog", "safeno", "root");
    

    $banco->delete("posts", array("id" => 3));

    echo "deletado";

/*
    $banco->update("posts", array("titulo" => "TITULO MODIFICADO"), array("id" => 2));

        echo "Sucesso update";
     
    $banco->insert("posts", array(
        "titulo" => 'Titulo teste insert',
        "corpo"  => 'Corpo testando insert',
        "data"  => '2022-04-14 18:34:44'
    ));

        echo "inserido com suceso";
    */    

?>