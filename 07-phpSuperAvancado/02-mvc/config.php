<?php 

    require 'environment.php';
    define("BASE_URL", "http://www.cursophp.pc/07-phpSuperAvancado/02-mvc/");

    global $config;
    $config = array();


    if(ENVIRONMENT == "development"){
        // environment development
        $config['dbname']   =   'galeria';
        $config['host']     =   'localhost';
        $config['dbuser']   =   'safeno';
        $config['dbpass']   =   'root';
    
    }else{
        // environment production
        $config['dbname']   =   'galeria';
        $config['host']     =   'localhost';
        $config['dbuser']   =   'root';
        $config['dbpass']   =   'root';
    }
?>