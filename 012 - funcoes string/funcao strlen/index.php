<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonstração STRLEN</title>
</head>
<body>
    <main>
        <?php 
            echo "<h1>Demonstração da função strlen</h1>";
            echo "Função strlen exibe a quantidade de caracteres em uma string, incluindo os espaços<br><br>";

            echo "Texto: ";
            $texto = "Uma frase para ser contada.";
            echo $texto;
            $tamanho = strlen($texto);
            printf("<br>O tamanho do texto é de: %d",$tamanho);
        ?>
    </main>
    
</body>
</html>