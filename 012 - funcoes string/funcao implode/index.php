<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonstração funcao implode</title>
</head>
<body>
    <?php
        echo "<h1>Demonstração da função implode</h1>"; 
        echo "<p>Transforma um Array em uma String.</p>";
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Vídeo";
        $texto = implode(" ", $vetor);
        echo $texto;

    ?>
</body>
</html>