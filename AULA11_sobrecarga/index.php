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
Classe abstrata: não pode ser instanciada, somente pode server como progenitora
Método abstrato: Declara, mas não implementado na progenitora.
Classe final: Não pode ser herdada por outra classe.
Método final: Não pode ser sobrescrito pelas suas sub-classes e é herdado.
Herança probra, ou de implementação é quando não inclui nada depois que herdar.

*/
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        //não pode ser instanciada class abstract
        //$p1 = new Pessoa();
        $v1 = new Visitante();
        $a1 = new Aluno();
        $b1 = new Bolsista();

        $v1->setNome('Felipe');
        $v1->setIdade(33);
        $v1->setSexo('M');

        $a1->setNome('Pedro');
        $a1->setMatricula(111);
        $a1->setIdade(16);
        $a1->setSexo('M');
        $a1->setCurso('Informatica');
        $a1->pagarMensalidade();

        $b1->setNome('Daniel');
        $b1->setMatricula(123);
        $b1->setBolsa(12.5);
        $b1->setCurso('Adm');
        $b1->setIdade(15);
        $b1->pagarMensalidade();





        echo '<pre>';

            print_r($a1);
            print_r($v1);
            print_r($b1);
        echo '</pre>';
        


    ?>    
</body>
</html>