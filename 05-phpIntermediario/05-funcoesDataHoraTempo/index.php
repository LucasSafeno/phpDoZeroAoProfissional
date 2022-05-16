<?php

    /*
        $dataAtual = date("d/m/Y  H:i:s");

        echo $dataAtual;
    */


    $dataproxima = date('d/m/Y', strtotime("+10 days"));

    echo $dataproxima;

?>