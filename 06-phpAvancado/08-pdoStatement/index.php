<?php 
    require "usuarios.php";

    $u = new Usuario();

    /*
    $res = $u->selecionar(1);
    print_r($res);
    */

    /*
    $u->inserir("Lucas Safeno", "safeno@funcao.com", "123456");
    echo "Usuário inserido!";
    */

    /*
    $u->atualizar("Lucas Update", "update@update.com", "1234", 1);
    echo "Usuário atualizado com sucesso";  
    */


    $u->deletar(2);
    echo "Usuário deletado!";


?>