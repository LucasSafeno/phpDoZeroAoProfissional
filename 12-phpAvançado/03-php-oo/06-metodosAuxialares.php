<?php 

class Post{

	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;
	private $qtComentarios;



	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($t){
		if(is_string($t)){
			$this->titulo = $t;
		}
	}
		
	
	public function addComentario($msg){
		$this->comentarios[] = $msg;
		$this->contarComentarios();

	}

	public function getQuantosComentarios(){
		return $this->qtComentarios;
	}

	private function contarComentarios(){
		$this->qtComentarios = count($this->comentarios);
	}


}//Post

$post = new Post();
$post->addComentario("Teste");
$post->addComentario("Teste 2");
$post->addComentario("Teste 3");
$post->addComentario("Teste 4");

echo "Quantidade de comentarios ".$post->getQuantosComentarios();

 ?>