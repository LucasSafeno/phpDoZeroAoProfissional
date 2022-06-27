<?php 

class Cachorro{

	public function latir(){
		echo "au au";
	}



} // Cachorro


$cachorro = new Cachorro();
$cachorro->latir();

echo "<br>";

$cachorro2 = new Cachorro();
$cachorro2->latir();



 ?>