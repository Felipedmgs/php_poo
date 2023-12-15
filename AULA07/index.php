<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - aula poliformismo</title>
</head>
<body>
    <header>
       <h1>Projeto Luta</h1>
    </header>

    <?php
        require_once 'Lutador.php';

        $l = array();
        
        //criando lutadores
        $l[0] = new Lutador("Felipe Boy", "Sampa", 33, 1.75, 68.9, 11, 2, 1);
        $l[1] = new Lutador("Felipejs", "Santo Andre", 34, 1.85, 57.9, 11, 3, 2);
        $l[2] = new Lutador("Felipephp", "SBC", 35, 1.95, 80.9, 11, 2, 1);
        $l[3] = new Lutador("Felipesql", "SCS", 36, 1.55, 81.9, 11, 2, 1);
        $l[4] = new Lutador("Felipesc", "NY", 37, 1.65, 119.9, 11, 2, 1);
        $l[5] = new Lutador("Felipevscode", "Londres", 38, 1.45, 105.9, 11, 2, 1);
        $l[6] = new Lutador("Felipedocker", "Japão", 39, 1.35, 105.9, 11, 2, 1);
        
        
        
        $l[0]->apresentar();
        $l[0]->Status();

        $l[1]->apresentar();


    ?>

 
    
</body>
</html>

