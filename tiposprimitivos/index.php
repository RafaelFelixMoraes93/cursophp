<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
        // 0x = Hexadecimal - 0b = Binário - 0 = Octal
        // $num = 0x1A;
        // echo "O valor da variável é $num";

        // $variavel = 300;
        // var_dump($variavel); // mostra entre parênteses e mostra o tipo

        // $num = 3e2; // 3 x 10(²) // sempre que for potência vira float, mas podemos fazer o casting para conversão (coerção). $num = (integer) 3e2;
        // echo "O valor da potenciação é: $num";

        // $casado = true;
        // //var_dump($casado);
        // echo "O valor para casado é $casado";

        // $vetor = [6, 2, "Maria", false, 5];
        // var_dump($vetor);

        class Pessoa {
            private string $nome = "Rafael";
        }

        $pessoa = new Pessoa;
        var_dump($pessoa);
    ?>
</body>
</html>