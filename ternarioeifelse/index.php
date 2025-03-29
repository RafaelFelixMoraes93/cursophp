<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            $a = 10;
            $b = 5;            

            echo "<h1>Exemplo de IF e ELSE</h1><br>";

            if($a > $b){
                echo $a . " é maior que " . $b . ".<br>";
            } else {
                echo $b . " é maior que " . $a . ".<br>";
            }

            echo "<h1>Exemplo de TERNARIO</h1><br>";
            
            $maior = $a > $b ? $a : $b;

            echo "O maior valor é " . $maior . "<br>";
        ?>
    </main>    
</body>
</html>