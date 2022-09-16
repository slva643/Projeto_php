<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Declarando funções</title>
    </head>
    <body>
        <h1>Declarando funções</h1>
        <?php
            // Declara funções para somar
            // dois valor
            function soma($valor1, $valor2){
            $resultado = $valor1 + $valor2;
            return $resultado;
        }
        ?>
        <h2>Agora vamos usar a função soma com os valores 3 e 6!</h2>
        <?php
            $tres = 3;
            $seis = 6;
            echo soma($tres, $seis);
        ?>
    </body>
</html>