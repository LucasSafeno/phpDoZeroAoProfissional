<?php 
require "usuarios.php";

$usuario = new Usuario(2);
$usuario->setNome("Teste Update");
$usuario->salvar();

echo "Usuário alterado com sucesso,!"

?>