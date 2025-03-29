<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <main>
        <?php 
            $valordeswtich = 2;

            switch($valordeswtich){
                case 1: echo "A";
                break;

                case 2: echo "B";
                break;

                case 3: echo "C";
                break;

                default: echo "Erro";
            }
        ?>
    </main>    
</body>
</html>