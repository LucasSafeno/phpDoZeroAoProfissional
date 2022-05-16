<?php 

    class Post{
        private $titulo;
        private $data;
        private $corpo;
        private $comentarios;

        public function getTitulo(){
            return $this->titulo;

        } // getTitulo

        public function setTitulo($t){
           if(is_string($t)){
            $this->titulo = $t;
           }
            
        }// setTitulo


    } // fim classe Post

$post = new Post();
$post->setTitulo("Titulo válido");

echo "Titulo : ".$post->getTitulo();


?>