<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <main>
        <?php
        $contador = 0; 
            while($contador != 10){
                echo "Contagem " . $contador . ".<br>";
                $contador++;
            }
        ?>
    </main>    
</body>
</html>