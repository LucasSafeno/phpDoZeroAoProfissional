<?php 
    $ch = curl_init(); // inicia o cUrl

    curl_setopt($ch, CURLOPT_URL, "http://www.checkitout.com.br/wb/pingpong");
    curl_setopt($ch, CURLOPT_POST, "1");
    curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=lucas&idade=27&sexo=masculino");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resposta   =   curl_exec($ch);

    curl_close($ch);

    print_r($resposta);

?>