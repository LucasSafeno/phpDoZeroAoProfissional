<?php

    class homeController extends controller{
        
        public function index(){
           
             $fotos = new fotos();
             $dados['fotos'] =  $fotos->getFotos();


            $this->loadTemplate('home', $dados);
        }

        public function sobre(){

            $this->loadTemplate('sobre');

        } // sobre()    
 

    }// homeController

?>