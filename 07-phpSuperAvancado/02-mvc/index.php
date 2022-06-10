<?php 
    require 'config.php';
    //Autoload
    spl_autoload_register(function ($class){
        // verificar caso final do nome arquivo é controller
        if(strpos($class, 'Controller') > -1){
            // verifica se existe arquivo
            if(file_exists('controllers/'.$class.'.php'));{
                require_once 'controllers/'.$class.'.php';
            }

        }else if(file_exists('models/'.$class.'.php')){
            require_once 'models/'.$class.'.php';
        } else {
            require_once  'core/'.$class.'.php';
        }
    
    }); //autoload

   $core = new core();
   $core->run();
?>