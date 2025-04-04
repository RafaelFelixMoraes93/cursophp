<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php 
        $vetor = array (9, 8, 6, 9);
        echo "<h1>Array Unidimenssional primera forma.</h1>";
        echo '<p>Exemplo:<br>$vetor = array (9, 8, 6, 9);</p>';
        print_r($vetor);
        
        $vetor2[0] = 9;
        $vetor2[1] = 8;
        $vetor2[2] = 6;
        $vetor2[3] = 9;
        echo "<h1>Array Unidimenssional segunda forma.</h1>";
        
        echo '<p>Exemplo:<br>
        $vetor2[0] = 9;<br>
        $vetor2[1] = 8;<br>
        $vetor2[2] = 6;<br>
        $vetor2[3] = 9;<br>
        </p>';
        print_r($vetor2);

        echo '<p>Caso tenha necessidade de colocar mais um posição no array, basta colocar $vetor2[] = 7;</p>';
        $vetor2[] = 7;
        echo "Nova saída: ";
        print_r($vetor2);
    ?>
</body>
</html>