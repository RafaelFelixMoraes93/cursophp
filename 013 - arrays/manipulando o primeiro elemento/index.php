<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Elemento</title>
</head>
<body>
    <pre>
    <?php        
        $vetor = array(3, 5, 8, 2);
        echo '<h1>Manipulando o primeiro elemnto</h1>';
        echo '$vetor = array(3, 5, 8, 2);';
        print_r($vetor);
        echo '<p>Para adicionar um item, usamos array_unshift($vetor, 7);</p>';
        array_unshift($vetor, 7);
        print_r($vetor);

        echo '<p>Para remover um item, usamos array_shift($vetor);</p>';
        array_shift($vetor);
        print_r($vetor);
    ?>
    </pre>
</body>
</html>