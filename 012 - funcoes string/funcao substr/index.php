<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função substr</title>
</head>
<body>
    <?php 
        $site = "Curso em Video";
        $sub = substr($site, 0, 8);
        echo "<h1>Substr mostra os caracteres de N até N em uma String</h1>";
        echo "$sub";
    ?>
</body>
</html>