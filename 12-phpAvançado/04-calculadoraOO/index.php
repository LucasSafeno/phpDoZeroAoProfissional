<?php 
    class Calculadora{

         private $n;

        public function __construct($numeroInicial){
                $this->n = $numeroInicial;
        }

          public function somar($n1)  {
                $this->n += $n1;

                return $this;
          } // somar()

          public function subtrair($n1){
            $this->n -= $n1;

            return $this;
          } // subtrair

          public function multiplicar($n1){
            $this->n *= $n1;

            return $this;
          }// multiplicar()

          public function dividir($n1){
            $this->n /= $n1;

            return $this;
          } // dividir()


          public function resultado(){
            return $this->n;
          }



    } // Calculadora


    $calc = new Calculadora(10);

    $calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
    $resultado = $calc->resultado(); # 22.5

    echo "Resultado é ".$resultado;



 ?>