<?php 

    class Pessoa{

        private $nome;
        private $idade;
        public function __construct($nome, $idade) {
            
            $this->nome = $nome;
            $this->idade = $idade;
        } // contruct

        public function getNome(){
            return $this->nome;
        } // getNome()

        public function getIdade(){
            return  $this->idade;
        }// getIdade

    } // Pessoa


    class PessoaAdapter{
        private $sexo;
        private $pessoa;
        

        public function __construct(Pessoa $pessoa){
            $this->pessoa = $pessoa;
        }// construct()

        public function setSexo($s){
            $this->sexo = $s; 
        } //getSexo

        public function getSexo(){
            return $this->sexo;
        }

        public function getNome(){
            return $this->pessoa->getNome();
        } // getNome();

        public function getIdade(){
            return $this->pessoa->getIdade();
        }
        
    }//PessoaAdapter



    $pessoa = new Pessoa("Lucas", 90);

    $pa = new PessoaAdapter($pessoa);
    $pa->setSexo("Masculino");

    echo "Meu nome é ".$pa->getNome()." - Idade: ".$pa->getIdade()." - Sexo : ".$pa->getSexo();

?>