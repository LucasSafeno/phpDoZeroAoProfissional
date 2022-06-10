<?php
    
    $imagem = "teste.jpg";

    list($largura_original, $altura_original) = getimagesize($imagem);
    list($largura_mini, $altura_mini) = getimagesize("mini-imagem.png");

    $imagem_final = imagecreatetruecolor($largura_original, $altura_original);

    $imagem_original = imagecreatefromjpeg("teste.jpg");
    $imagem_mini = imagecreatefrompng("mini-imagem.png");

    imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0, $largura_original, $altura_original);


    imagecopy($imagem_final, $imagem_mini, 0, 0, 0, 0, $largura_mini, $altura_mini);

    header("Content-type: image/jpeg");
    imagejpeg($imagem_final, null, 100);

    

?>