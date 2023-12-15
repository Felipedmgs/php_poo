<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - aula poliformismo</title>
</head>
<body>
    <header>
       <h1>Projeto Controle remoto</h1>
    </header>

    <?php
        require_once('ControleRemoto.php');
        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();
        $c->maisVolume();
        $c->maisVolume();
        $c->play();


        $c->abrirMenu();
        
       

    ?>

 
    
</body>
</html>

