<?php 
    class Cachorro{
        public function latir(){
            echo "au au";
        }
    } // fim classe cachorro


    // Instancia do objeto cachorro
    $sunny = new Cachorro();
    // Uso do metódo
    $sunny->latir();

    echo "<br />";

    // outra instancia
    $spike = new Cachorro();
    $spike->latir();

    echo "<br />";

    //Executar função sem instanciar
    Cachorro::latir();

?>