<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String to First and First each Upper</title>
</head>
<body>
    <?php 
        // UC = Upper Case
        $nome = "rafael felix";
        $nometransformado = ucfirst($nome);
        $nometransformado2 = ucwords($nome);
        echo "<h1>Deixa a primera letra em maiúsculo</h1>";
        echo "Seu nome é $nometransformado.";

        echo "<h1>Deixa a primera letra de cada palavra em miúsculo</h1>";
        echo "Seu nome é $nometransformado2";
    ?>    
</body>
</html>