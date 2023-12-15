<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $p[0] = new Pessoa("Felipe", 33, "M");
        $p[1] = new Pessoa("Mirelle", 28, "F");

        $l[0] = new Livro("PHP Basico", "Gustavo Guana", 300,$p[0]);
        $l[1] = new Livro("POO com PHP e Composer", "Felipe Champers", 500, $p[1]);
        $l[2] = new Livro("PHP Avançado", "Ana Paulo", 800, $p[1]);

        echo "<pre>";
        //print_r($l[0]);

        $l[0]->abrir();
        $l[0]->folhear(10);
        $l[0]->avancarPag();
        $l[0]->detalhe();


        echo "</pre>";

    ?>
</body>
</html>

