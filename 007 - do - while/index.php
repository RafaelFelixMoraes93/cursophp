<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do - While</title>
</head>
<body>
    <main>
        <?php 
            $contador = 1;

            do {
                echo $contador . "<br>";
                $contador++;
            } while ($contador <= 10);
        ?>
    </main>    
</body>
</html>