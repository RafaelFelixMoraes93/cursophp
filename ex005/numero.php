<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
    <main>
        <?php         
            $numero = $_GET["numero"] ?? "Número Inválido";
            echo "O número escolhido foi " . $numero . "<br>";
            echo "Seu antecessor é " . $numero-1 . "<br>";
            echo "Seu sucessor é " . $numero+1 . "<br>";
        ?>
        <a href="http://localhost/cursophp/ex005/"><button type="button"><- Voltar</button></a>
    </main>
    </section>    
</body>
</html>