<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função str_pad</title>
</head>
<body>
    <?php 
        $nome = "Guanabara";
        echo "<h1>Função str_pad</h1>";
        echo "<p>Está função <strong>adiciona N caracteres ou espaços</strong> em uma String</p>";

        echo "<p>STR_PAD_RIGHT</p>";
        $nomeright = str_pad($nome, 30, "*", STR_PAD_RIGHT);
        echo "Meu professor $nomeright é lindo!";

        echo "<p>STR_PAD_LEFT</p>";
        $nomeboth = str_pad($nome, 30, "*", STR_PAD_BOTH);
        echo "Meu professor $nomeboth é lindo!";

        echo "<p>STR_PAD_LEFT</p>";
        $nomeleft = str_pad($nome, 30, "*", STR_PAD_LEFT);
        echo "Meu professor $nomeleft é lindo!";
    ?>
</body>
</html>