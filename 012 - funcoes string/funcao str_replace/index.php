<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função str_replace</title>
</head>
<body>
    <?php 
        $frase = "Gosto de estudar Metemática! Metemática é muito legal!";
        $novafrase = str_replace("Metemática", "PHP", $frase);

        echo "<h1>Função STR_REPLACE</h1>";
        echo "<p>Substitui um trecho da String por outra escolhida.</p>";
        echo "Palavra escolhida: PHP.<br>";
        print("Frase original: $frase.<br>");
        print("Frase modificada: $novafrase.<br>");
    ?>
</body>
</html>