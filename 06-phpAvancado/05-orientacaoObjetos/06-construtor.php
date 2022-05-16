<?php 

    class Posts{
        private $titulo;
        private $data;
        private $corpo;
        private $comentarios;

        // metodos construtor - primeiros a ser executados
        public function __construct($t, $c){
            $this->setTitulo($t);
            $this->setCorpo($c);

        } // construct()

        public function getTitulo(){
            return $this->titulo;
        } // getTitulo()

        public function setTitulo($t){
            if(is_string($t)){
                $this->titulo = $t;
            }
        } // setTitulo()


        public function setCorpo($c){
            $this->corpo = $c;
        } // setCorpo();



    } // fim classe post

    $post = new Posts("Titulo Construct", "Corpo da minha postagem");

    echo "Titulo : ".$post->getTitulo();


?>