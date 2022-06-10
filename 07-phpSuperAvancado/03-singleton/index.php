<?php 

    class Pessoa{
        private $nome;
        private $idade;

        public static function getInstance(){
            static $instance    =   null;
                if($instance  === null){
                    $instance = new Pessoa();
                }
                return $instance;
        }// getInstance()

        private function __construct(){
            
        } // construct()

        public function setNome($n){
            $this->nome = $n;
        } // setNome()

        public function getNome(){
            return $this->nome;
        } // getNome()

        public function setIdade($i){
            $this->idade = $i;
        } // setIdade()

        public function getidade(){
            return $this->idade;
        }

    }// Pessoa


    $cara = Pessoa::getInstance();
    $cara->setNome("Lucas");

    $cara2 = Pessoa::getInstance();
    $cara2->setIdade(90);

    echo "Idade: ".$cara->getIdade();

?>