<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonstração str_word_count</title>
</head>
<body>
    <main>
        <?php 
            $frase = "Eu vou estudar PHP";

            echo "<h1>Conta quantas palavras tem em uma frase.</h1>";
            
            printf("Frase: %s, quantidade de palavras: %d.", $frase, str_word_count($frase));
        ?>
    </main>    
</body>
</html>