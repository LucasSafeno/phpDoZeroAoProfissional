<?php 
    require 'usuario.php';
    /*
        $usuario = new Usuario();
    
        $usuario->setEmail("teste@hotmail.com");
        $usuario->setSenha("123");
        $usuario->setNome("testador");
        $usuario->salvar();

        echo "Usuário criado com sucesso !";

      

    
     $usuario2->setEmail("teste@teste.com");
     $usuario2->setSenha("123");
     $usuario2->setNome("pega cão");
     $usuario2->salvar();

     echo "Cadastrado";

       */

      $usuario2 = new Usuario(2);
/*
    $usuario2->setNome("Lucas Tenório");
    $usuario2->salvar();

    echo "Salvo";
*/

$usuario2->setNome("Lucas Tenório");
$usuario2->setEmail("lucas@email.com");
$usuario2->setSenha("123");
$usuario2->salvar();

echo "cadastradi!";

?>