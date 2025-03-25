<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <?php
            $numeroreal = $_GET["numeroreal"] ?? "Valor inválido";
            $valorinteiro = (int) $numeroreal;
            $valorfracional = substr($numeroreal, -3);
            echo "<h1>Analisador de Número Real</h1>" . "<br>";
            echo "<p>Analisando o número <strong>" . $numeroreal . " </strong>informado pelo usuário: </p>" ."<br>";
            echo "• A parte inteira do número é <strong>" . $valorinteiro . "</strong>." . "<br>";
            echo "• A parte fracionária do número é <strong>0," . $valorfracional . "</strong>.";
        ?>
        <a href="http://localhost/cursophp/ex008/"><button type="button">Voltar</button></a>
    </section>
</body>
</html>