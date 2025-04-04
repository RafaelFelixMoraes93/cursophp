<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Observação, é sensitive case
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "php"); // caso coloque maiúsculo irá funcionar normalmente
        echo "$frase <br> A string foi encontrada na posição $pos<br>";

        // Nesse caso o "i" adicionado significa ignore case
        $posicao = stripos($frase, "php");
        echo "$frase <br> A string foi encontrada na posição $posicao";
    ?>
    
</body>
</html>