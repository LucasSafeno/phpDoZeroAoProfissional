<?php 

    class postsController extends controller{


        public function index(){
            echo "Lista posts";
        }


        public function ver($nome, $sobrenome){
            echo "Nome : ".$nome." - Sobrenome :".$sobrenome;
        }

     } //testeController

?>