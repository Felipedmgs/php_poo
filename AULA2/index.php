<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - aula 2</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';

        //instanciando objeto 
        $c1 = new Caneta;

        //definindo valor dos atributos
        $c1->cor='Azul';
        $c1->ponta=0.5;
       // $c1->tampada=true;

        var_dump($c1);

        //chamando os metodos da classe caneta
        $c1->destampar();
        $c1->tampar();
        $c1->rabiscar();

    ?>
    
</body>
</html>

