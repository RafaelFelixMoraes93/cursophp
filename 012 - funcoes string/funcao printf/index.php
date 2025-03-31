<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printf</title>
</head>
<body>
    <main>
        <?php
            /*
            * %d valor decimal (positivo ou negativo)
            * %u valor decial sem sinal (apenas positivos)
            * %f valor real (devemos colocar .N para as casas * decimais %.02f / %0.1f)
            * %s string
            */
            $produto = "Leite";
            $preco = 4.50;
            echo "<h1>Demonstração PRINTF</h1>";
            printf ("O %s custa R$ %.2f", $preco, $preco);
        ?>
    </main>
    
</body>
</html>