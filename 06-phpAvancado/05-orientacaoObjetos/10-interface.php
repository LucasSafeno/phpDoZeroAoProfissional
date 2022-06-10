<?php 
    interface Animal{

        public function andar();

    } // Animal

    class Cachorro implements Animal{

        public function andar(){
            echo "estou andando...";
        }

    } // Cachorro

    $cachorro = new Cachorro();
    $cachorro->andar();
?>