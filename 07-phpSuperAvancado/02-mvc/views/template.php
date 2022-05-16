<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo do site</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/estilo.css">
    
</head>
<body>
    <h1>Topo do site</h1>
    
    <?php 
        $this->loadViewInTemplate($viewName, $viewData);
    ?>

    <h1>Roda pé do site</h1>
</body>
</html>