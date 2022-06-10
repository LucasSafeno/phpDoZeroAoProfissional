<?php
    # $grupos = array(1, 2, 3);
    # $grupos = array("Lucas", "Tenório")


    $grupos = array("Lucas", "Tenorio");
    echo $grupos[0];

    echo "\n";

    $variavel = array(
        "nome" => "Lucas",
        "sobrenome" => "Tenório",
        "idade" => 90,
        "sexo" => "masculino"
    );


    # Acessar informações do array
    echo $variavel['nome']." ".$variavel['sobrenome'];

    echo "\n";

    # Alterando valor informações array

    $variavel['idade'] = 28;

    echo "Eu tenho ". $variavel['idade']. " anos";

    echo "\n";echo "\n";

    # Mostrar na tela todo array

    print_r($variavel);

    # Array dentro de Array

    $produtos = array(
        0 => array(
            "nome" =>  "Notebook",
            "quantidade" => 100,
            "infor" => "Notebook 8GB RAM, 1TB HD"
        ),
        
        1 => array(
            "nome" =>  "Geladeira",
            "quantidade" => 50,
            "infor" => "Geladeira duas portas, economica"
        )
    );

    # Adicionando valor no array

    $produtos[] = array(
        "nome" =>  "Smartphone",
        "quantidade" => 150,
        "infor" => "Smartphone Redmi"
    );


    print_r($produtos);
?>