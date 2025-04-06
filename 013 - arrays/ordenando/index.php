<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenação</title>
</head>
<body>
    <pre>
    <?php 
        echo '<h1>Ordenação de Arrays</h1>';
        $vetor = array(3, 5, 9, 7);
        echo '<p>$vetor = array(3, 5, 9, 7);</p>';
        print_r($vetor);
        echo '<h2>Para ordenar usamos a função: sort($vetor);</h2>';
        sort($vetor);
        print_r($vetor);

        echo '<h2>Ordenar de forma reversa, usamos: rsort($vetor);</h2>';
        rsort($vetor);
        print_r($vetor);

        echo '<h1>Ordenação associativa</h1>';
        echo '<p>Faz a ordenação, mas mantem os índices.</p>';
        echo '<h2>Para ordenar de forma associativa, usamos: asort($vetor);</h2>';
        $vetorassociativo = array(15, 9, 1, 19);
        echo '<p>$vetorassociativo = array(15, 9, 1, 19);</p>';
        print_r($vetorassociativo);
        echo '<h2>Usando a ordenação associativa</h2>';
        asort($vetorassociativo);
        print_r($vetorassociativo);

        echo '<h2>Ordenação associativa reversa</h2>';
        $vetorassociativoreverso = array(15, 9, 1, 19);
        echo '<p>$vetorassociativoreverso = array(15, 9, 1, 19);</p>';
        print_r($vetorassociativoreverso);
        echo '<h2>Usando ordenação associativa reversa: arsort($vetor);</h2>';
        arsort($vetorassociativoreverso);
        print_r($vetorassociativoreverso);

        echo '<h2>Ordenação por chaves</h2>';
        $vetorchaves =  array("Z", "A", "Y", "M");
        asort($vetorchaves);
        print_r($vetorchaves);
        echo '<h2>Para ordenar as chaves, usamos: ksort($vetor);</h2>';
        ksort($vetorchaves);
        print_r($vetorchaves);

        echo '<h2>Ordenação reversa por chaves</h2>';
        $vetorchavesreversa =  array("Z", "A", "Y", "M");
        asort($vetorchavesreversa);
        print_r($vetorchavesreversa);
        echo '<h2>Para ordenar as chaves em ordem reversa, usamos: krsort($vetor);</h2>';
        krsort($vetorchavesreversa);
        print_r($vetorchavesreversa);
    ?>
    </pre>
</body>
</html>