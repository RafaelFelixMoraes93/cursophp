<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonstração </title>
</head>
<body>
    <main>
        <?php 
            $texto = "   José Maria da Silva    ";
            $novotexto = trim($texto);

            echo "<h1>Demonstração da função TRIM</h1>";
            echo "<p><strong>Remove os espaços do inicio de do fim</p></strong><br>";

            echo "<strong><p>Exibindo a variável e sua quantidade de caracteres antes do trim.</p></strong>";
            printf("Variável: %s, quatidade de caracteres: %d.<br>", $texto, strlen($texto));

            echo "<br><strong><p>Exibindo a variável e sua quantidade de caracteres após o trim</p></strong>";
            printf("Variável: %s, quantidade de caracteres: %d.", $novotexto, strlen($novotexto));
        ?>
    </main>    
</body>
</html>