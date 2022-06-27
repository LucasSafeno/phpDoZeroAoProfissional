<?php 

class Post{

	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;


	public function __construct($t){
		$this->setTitulo($t);
	}


	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($t){
		if(is_string($t)){
			$this->titulo = $t;
		}
		
	}

}//Post

$post = new Post("Titulo Qualquer");

echo "TItulo do Post : ".$post->getTitulo();

 ?>