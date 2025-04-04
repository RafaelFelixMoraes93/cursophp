<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Range</title>
</head>
<body>
    <table border="1"><tr>
    <?php 
        $vetor = range(5, 20, 5);
        echo "<h1>Criar um array de forma diferente</h1>";
        echo '$vetor = range(5, 20, 5);';
        echo "<p>Nesse caso, será criado um vetor com 4 posições, iniciando com 5 e terminando em 20, pelando de 5 em 4.</p>";
        foreach($vetor as $valor){
            echo "<td>$valor";
        }
        
    ?>    
    </table>
    
    <table border="1"><tr>
    <?php
        echo "<h1>Criando array personalisado</h1>";
        $vetor2 = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
        echo '<p>$vetor2 = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");</p>';
        echo "<p>Nesse caso será criado um array de 4 posições.</p>";
        echo '<p>Caso queira removar algum índice: unset($vetor2[índice]);</p>';
        unset($vetor2[1]);
        foreach($vetor2 as $valor){
            echo "<td>$valor";
        }        
    ?>
    </table>

    <table border="1"><tr>
        <?php 
            echo '<h1>Chaves Associativas</h1>';
            $cadastro =array(
                "nome" => "Maria",
                "idade" => 25,
                "peso" => 65.5
            );
            echo '<p>$cadastro =array(
                "nome" => "Maria",<br>
                "idade" => 25,<br>
                "peso" => 65.5
            );</p>';
            
            echo '<p>Adicionando valores.</p>';
            echo '$cadastro["fuma"] = true;';
            $cadastro["fuma"] = true;

            foreach ($cadastro as $valor){
                echo "<td>$valor";
            }
        ?>
    </table>
</body>
</html>