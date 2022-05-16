<?php 
    class Animal{

        public function getNome(){
            echo "getNome da classe Animal";
        }

    }// Animal

    class Cachorro extends Animal {

        public function getNome(){
            echo "getNome da classe Cachorro";
        }

    } // Cachorro

    $cachorro = new Cachorro();
    $cachorro->getNome();
   

?>