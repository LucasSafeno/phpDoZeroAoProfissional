<?php 
require "usuarios.php";

$u = new Usuarios();
/*
$res = $u->selecionar(1);
print_r($res);
*/
 //$u->inserir("Thauanna Santos", "thauanna@gmail.com", "123");

// $u->atualizar("Teste 2", "teste@teste.com", "123", 4);

$u->deletar(10);

?>