<?php 

    require '12-1-namespace.php';
    require '12-2-namespace.php';

    $sobre = new aplicacao\v2\Sobre();
    echo "Versão : ".$sobre->getVersao();

?>