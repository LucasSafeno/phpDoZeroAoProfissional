<?php 

    class Post{

            private $titulo;
            private $data;
            private $corpo;
            private $comentarios;
            private $qtComentarios;


            public function getTitulo(){

                    return $this->titulo;

            } // getTitulo()


            public function setTitulo($t){
                if(is_string($t)){

                }$this->titulo = $t;


            } // setTitulo()


            public function addComentario($msg){

                $this->comentarios[] = $msg;

                $this->contarComentarios();


            } // addComentario()

            public function getQuantosComentarios(){
                // return count($this->comentarios);

                return $this->qtComentarios;  

            } // get QuantosComentarios()


            private function contarComentarios(){
                $this->qtComentarios = count($this->comentarios);
            } // contarComentarios()


    } // Post

$post = new Post();
$post->addComentario("Teste 1");
$post->addComentario("Teste 2");
$post->addComentario("Teste 3");
$post->addComentario("Teste 4");
$post->addComentario("Teste 5");

echo "Quantidade de comentarios : ".$post->getQuantosComentarios();



?>