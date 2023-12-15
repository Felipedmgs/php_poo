<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

/*
Polimorfismo, é que existe varias maneiras de se fazer determinada coisa
Assinatura é a quantidade e o nome de metodo da função

tipos de polimorfismo:
    sobreposição: ocorre quando substituimos um metodo da superclasse em sua subclasse
    sobrecarga

    canguru
    cachorro
    cobra
    tartaruga
    goldfish
    arara

*/
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';

        $m   = new Mamifero();
        $c   = new Cachorro();
        $can = new Canguru();
        $t   = new Tartaruga();
        
        $m->locomover();
        $c->locomover();
        $can->locomover();
        $t->locomover();
    
    ?>    
</body>
</html>