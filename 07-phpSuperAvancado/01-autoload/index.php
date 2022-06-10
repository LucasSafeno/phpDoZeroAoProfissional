<?php 
/*
        FORMA ANTIGA
    function __autoload($class){
        include_once ($class."bola.class.php");
    }
*/

    #Definindo autoload
    spl_autoload_register(function ($class){
        if(file_exists('classes/'.$class.'.class.php')){
            require_once('classes/'.$class.'.class.php');
        }
    });

    $obj = new bola();
    $obj->setCor('vermelho');

    echo "A cor é ".$obj->getcor()."<br><br>";

    $campo = new campo();
    $campo->setDados(20,30,40);

    echo "Mê de a largura : ".$campo->getLargura();

?>