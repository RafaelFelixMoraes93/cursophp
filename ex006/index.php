<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            echo "O valor gerado foi " . random_int(0, 100);            
        ?>
        <a href="http://localhost/cursophp/ex006/"><button type="button">Gerar outro</button></a>
        
    </section>    
</body>
</html>