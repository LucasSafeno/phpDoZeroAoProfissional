<?php 

    class usuario{
        
        private $nome;
        
        public function setNome($n){
            $this->nome = $n;
        } // setNome();

        public function getNome(){
            return $this->nome;
        }


    } // usuario


?>