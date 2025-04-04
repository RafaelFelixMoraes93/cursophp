<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função STR_REPEAT</title>
</head>
<body>
    <?php 
        $txt = str_repeat("Php", 5);

        echo "<h1>Função STR_REPEAT</h1>";
        echo "<p>A função str_repeat repete N vezes uma determinada string.</p>";

        echo "Exemplo 1: repetir a string ''Php 5x''";
        print("O texto gerado foi $txt<br>");

        echo "<p>Exemplo 2: repetir a string ''- / 20x''</p>";
        print(str_repeat("- /<br>", 20));
    ?>
</body>
</html>