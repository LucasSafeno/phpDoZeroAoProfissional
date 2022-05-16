<?php 

    class controller{

        public function loadView($viewName, $viewData = array()){
            extract($viewData);
            include 'views/'.$viewName.'.php';
        }// loadView()


        public function loadTemplate($viewName, $viewData = array()){
            include('views/template.php');
        }

        public function loadViewInTemplate($viewName, $viewData = array()){

            extract($viewData);
            include 'views/'.$viewName.'.php';

        } // loadViewInTemplate()

    }// controller


?>