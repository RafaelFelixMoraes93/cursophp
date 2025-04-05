<!DOCTYPE html>
<html lang="pr_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonstração PRINT_R</title>
</head>
<body>
    <?php
        // Focada para o programador, usada para fazer testes.
        $x[0] = 4;
        $x[1] = 3;
        $x[2] = 8;

        echo "<h1>Imprimindo o vetor com print_r</h1>";
        print_r($x);

        $x2 = array (3, 7, 6, 2, 1, 9);
        echo "<h1>Segundo exemplo de vetor com print_r</h1>";
        print_r($x2);
    ?>
    
</body>
</html>