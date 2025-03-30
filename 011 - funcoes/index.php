<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php

            echo "<h1>Criando e Chamando Funções</h1>";
            function saudando() {
                echo "Olá, bem vindo ao sistema\n";
            }
            saudando();


            echo "<h1>Funções com Parâmetros</h1>";
            function saudacao($nome) {
                echo "Olá " . $nome . "! Bem vendo ao sistema.<br>";
            }
            saudacao("Rafael");


            echo "<h1>Funções com Retorno</h1>";
            function soma($a, $b) {
                return $a + $b;
            }
            $resultado = soma(5, 7);
            echo "Resultado: " . $resultado. "\n";


            echo "<h1>Funções com Valores Padrão</h1>";
            function novasaudacao($nome = "Visitante") {
                echo "Olá, " . $nome . "! Seja bem vindo.<br>";
            }            
            echo "Função sem parametro: ";
            novasaudacao();
            echo "Função com parametro: ";
            novasaudacao("Rafael");

            echo "<h1>Funções Recursicas</h1>";
            echo "<strong>Somando todos os números de 1 até n.</strong><br>";
            function somando($n) {
                if ($n <= 0) {
                    return 0;
                }
                return $n + somando($n - 1);
            }

            echo somando(5);        ?>
    </main>    
</body>
</html>