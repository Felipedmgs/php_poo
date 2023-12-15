<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - aula 3</title>
</head>
<body>
    <header>
       <h1>Banco</h1>
    </header>

    <?php
        require_once 'Banco.php';
        $b1 = new Banco('1','CP','Felipe');
    
        echo "<div>
                <tr>
                <th>Conta:               
                <td>" . $b1->getDono() . "</td>
                <td>" . $b1->getNumconta() . "</td>
                <td>" . $b1->getTipo() . "</td>
                <td>" . $b1->getSaldo() . "</td>
                </th>
                <tr>
            </div>
        ";

       
        
        $b1->sacar('130');
        //$b1->depositar('100');
        $b1->pagarMensal();
        $b1->fecharConta();   

        //$b1->fecharConta();
        var_dump($b1);       


    ?>
    <div>
        <label> <?php $b1->sacar('130'); ?></label>
        
    </div>

<div>


</div>

    
</body>
</html>

