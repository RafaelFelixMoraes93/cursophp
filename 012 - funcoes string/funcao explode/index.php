<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonstração Explode</title>
</head>
<body>
    <?php
        echo "<h1>Um versão um pouco mais nova da str_word_count</h1>";
        $site = "Curso em Video";
        $vetor = explode(" ", $site);
        print_r($vetor);
    ?>
    
</body>
</html>