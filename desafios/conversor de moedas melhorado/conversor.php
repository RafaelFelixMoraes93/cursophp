<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Real em Dolar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $cotacao = 5.75;
            $valor = $_GET["valor"] ?? "Valor inválido!";
            $dolar = $valor / $cotacao;
            $padrao = numfmt_create("pt_BR" , NumberFormatter::CURRENCY);

            echo "<h1><strong>Conversor de Moedas v1.0</strong></h1>" . "<br>";
            
            echo "Seus <strong>" . numfmt_format_currency($padrao, $valor, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD" . "</strong>");
            echo "<br><br><strong>Cotação fixa de 5.75</strong> informada diretamente no código.<br><br>"
        ?>        
        <a href="http://localhost/cursophp/desafios/conversor%20de%20moedas/"><button type="button">Voltar</button></a>  
    </main>   
</body>
</html>