<?php 
 require "config.php";
 require "classes/reservas.class.php";
 require "classes/carros.class.php";

 $reservas  = new Reservas($pdo);
 $carros    = new Carros($pdo);

    if(!empty($_POST['carro'])){
        $carro = addslashes($_POST['carro']);
        $data_inicio = explode('/',addslashes($_POST['data_inicio']));
        $data_fim = explode('/',addslashes($_POST['data_fim']));
        $pessoa = addslashes($_POST['pessoa']);

        $data_inicio =  $data_inicio[2].'-'.$data_inicio[1].'-'.$data_inicio[0];
        $data_fim =  $data_fim[2].'-'.$data_fim[1].'-'.$data_fim[0];

        if($reservas->verificarDisponibilidade($carro, $data_inicio, $data_fim)){
            $reservas->reservar($carro, $data_inicio, $data_fim, $pessoa);
            header("Location: index.php");
            exit; 
        }else{
            echo "Este carro já está reservado nesse periodo";
        }// verificarDisponibilidade


    }



?>
<h1>Adicionar Reservas</h1>

<form method="POST">
    Carro : <br>
    <select name="carro">
    <?php 
        $lista = $carros->getCarros();

        foreach($lista as $item): ?>
        <option value="<?php echo $item['id']; ?>"> <?php echo $item['nome'] ?> </option>

    <?php
        endforeach;
    ?>
    </select> <br> <br>

    Data de Inicio : <br>
    <input type="text" name="data_inicio"> <br> <br>

    Data de Fim : <br>
    <input type="text" name="data_fim"> <br> <br>

    Nome : <br>
    <input type="text" name="pessoa"> <br> <br>

    <input type="submit" value="Reservar">

</form>