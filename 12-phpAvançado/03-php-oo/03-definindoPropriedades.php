<?php 

class Cachorro{

	 // Propriedades
	public $nome;
	private $idade;


} // Cachorro
$cachorro = new Cachorro();
$cachorro->nome = "Sunny";
$cachorro->idade = 5;

echo "O nome do cachorro é : ".$cachorro->nome;

 ?>