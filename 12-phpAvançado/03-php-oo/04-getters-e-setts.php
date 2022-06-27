<?php 

class Post{

	// Propriedades
	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;


	// Metodos
	public function getTitulo(){
		return $this->titulo;
	} // getTitulo()

	public function setTitulo($t){
		if(is_string($t)){

			$this->titulo = $t;
		}

	}// setTitulo();



}// Post

$post = new Post();
$post->setTitulo("Titulo teste setTitulo");

echo "Titulo : ".$post->getTitulo();


?>