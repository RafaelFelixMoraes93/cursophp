<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverte uma String</title>
</head>
<body>
    <?php 
        $nome = "rafael felix";
        $nomereverso = strrev($nome);
        echo "<h1>Nome original</h1>";
        echo $nome;
        echo "<h1>Nome reverso</h1>";
        echo $nomereverso;
    ?>
    
</body>
</html>