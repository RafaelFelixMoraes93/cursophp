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
            $contando = str_word_count($frase, 1);
            $contando2 = str_word_count($frase, 2);

            echo "<h1>Conta quantas palavras tem em uma frase.</h1>";
            
            printf("Frase: %s, quantidade de palavras: %d.", $frase, str_word_count($frase));
            
            echo "<strong><p>Podemos verificar em forma de array quantos paragrafos existem<p></strong>";
            print_r($contando);

            echo "<p><strong>Ainda é possível marcar a posição do inicio de cada palavra.<p></strong>";
            print_r($contando2);
        ?>
    </main>    
</body>
</html>