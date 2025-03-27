<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moraes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <?php 
        $valor = $_GET["valor"] ?? "Valor inválido";
        echo "<h1><strong>Conversor de Moedas v1.0</strong></h1>" . "<br>";
        echo "Seus R$ " . $valor . " equivalem a <strong>" . $valor / 5.765 . "</strong>." ."<br>";
        echo "<strong>Cotação fixa de 5.765</strong> informada diretamente no código."
    ?>
    <a href="http://localhost/cursophp/desafios/conversor%20de%20moedas/"><button type="button">Voltar</button></a>  
    </section>
</body>
</html>