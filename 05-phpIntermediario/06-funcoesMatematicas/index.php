<?php
    // echo abs(-10);
    // echo round(2.8);
    // echo ceil(3.3);
    //echo floor(3.9);
    // echo rand(3, 9);

    $listaNomes = array("Lucas", "Fulano", "Ciclano");

    $x = rand(0, 2);

    echo "O vencedor é : ".$listaNomes[$x];
?>