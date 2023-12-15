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

        //instanciando objeto 
        $c1 = new Caneta;
        $c1->modelo = 'BIC Cristal';
        //$c1->ponta = 0.5;
       // $c1->tampada = true; //definir a variavel diretamente não é possivel, isso deve ser feito atraves de métodos
       $c1->tampar();

        var_dump($c1);


    ?>
    
</body>
</html>

