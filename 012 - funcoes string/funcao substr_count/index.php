<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função substr_count</title>
</head>
<body>
    <?php 
        $frase = "Estou aprendendo PHP no Curso em vídeo de PHP";
        $contagem = substr_count($frase, "PHP");

        echo "<h1>Conta quantas vezes a palavra chave aparece em uma STRING</h1>";
        echo "<p>''Estou aprendendo PHP no Curso em vídeo de PHP''</p>";

        print("PHP encontrado $contagem vezes.");

    ?>
</body>
</html>