<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bidimenssional</title>
</head>
<body>
    <?php
        echo '<h1>Array Bidimenssional</h1>';
        $vetorbi = array(
            array(2,3),
            array(3,4),
            array(9,5));
            print_r($vetorbi);
        echo '<br>';
        $vetorbi[0][1] = 9;
        print_r($vetorbi);
    ?>
</body>
</html>