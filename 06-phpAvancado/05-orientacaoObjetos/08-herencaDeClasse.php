<?php 

    class Animal{
        public $nome;
        private $idade;


    } // Animal

######################################################################################################

    class Cavalo extends Animal{
        private $quantidadeDePatas;
        private $tipoDePelo;

    } // Cavalo


######################################################################################################
    class Gato extends Animal{
        private $quantidadeDePatas;
        private $miado;
        
    } // Gato


    $cavalo = new Cavalo();
    $cavalo->nome = "Pé de Pano";
    echo "Nome do cavalo é : ".$cavalo->nome;

    echo "<br />";

    $gato = new Gato();
    $gato->nome = "Floquinho";
    echo "nome do gato é : ".$gato->nome;

?>