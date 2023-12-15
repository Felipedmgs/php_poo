<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - aula 3</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';

        $c1 = new Caneta('BIC', 'AZUL', '0.5');
        
        /*
        $c1->setModelo('Bic');
        $c1->modelo = "Bic2"; // esse e o de cima pode definir o valor da propriedade do objeto, pois esta como plublic
        $c1->setPonta('0.5');
        */

        // $c1->ponta = "0.5"; // não pode usar, pois ele não é publico

        print "eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}.";
        print_r($c1);

    ?>
    
</body>
</html>

