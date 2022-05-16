<?php 

abstract class Animal{
    public $nome;
    private $idade;

    abstract protected function andar();

    public function setNome($n){
        $this->nome = $n;

    } // setName()

    public function getNome(){
        return $this->nome; 

    }// getNome();


} // Animal

######################################################################################################

class Cavalo extends Animal{
    private $quantidadeDePatas;
    private $tipoDePelo;

    public function  andar(){

    } // andar()

} // Cavalo


######################################################################################################
class Gato extends Animal{
    private $quantidadeDePatas;
    private $miado;

    public function andar(){

    } // andar()
    
} // Gato

$cavalo = new Cavalo();
$cavalo->setNome("Pé de pano");
echo "Nome do Cavalo é = ".$cavalo->getNome();


?>
