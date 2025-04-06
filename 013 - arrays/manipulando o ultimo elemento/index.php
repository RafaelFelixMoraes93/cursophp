<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimo Elemento</title>
</head>
<body>
    <pre>
    <?php
        // push e pop são usados para LIFO
        echo '<h1>Manipulando o ultimo elemento</h1>';
        $vetor = array(3, 5, 8, 2, 7);
        echo '$vetor = array(3, 5, 8, 2, 7);';
        print_r($vetor);
        echo '<p>Para adicionar um item, usamos: array_push($vetor, 9);</p>';
        array_push($vetor, 9);
        print_r($vetor);
        echo '<p>Para remover um item, usamos: array_pop($vetor);</p>';
        array_pop($vetor);
        print_r($vetor);        
    ?>
    </pre>
</body>
</html>