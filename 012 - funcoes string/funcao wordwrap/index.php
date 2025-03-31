<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domonstração WORDWRAP</title>
</head>
<body>
    <main>
        <?php
            // false = Em palavras como mais de N letras nesse caso 5, não gera quebra.
            // true  = Quebra linha sempre no valor N nesse caso 5.
            echo "<h1>Exibindo texto normal.</h1>";
            $texto = "Este é um exemplo de texto gigante para ser quebrado com wordwrap!!!<br>";
            echo $texto;

            echo "<h1>Exibindo texto com quebra de linha.</h1>";
            $resultado = wordwrap($texto, 5,"<br>\n", false);
            echo $resultado;
        ?>
    </main>
    
</body>
</html>