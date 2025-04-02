<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonstração str_split</title>
</head>
<body>
    <?php
        $nome = "Maria";
        $vetor = str_split($nome); 
        echo "<h1>Demonstração da função str_split</h1>";
        echo "<p>Pega os caracteres de uma string e coloca em um array sequencial.</p>";

        print_r($vetor);

    ?>
</body>
</html>