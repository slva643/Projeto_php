<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Projeto multiplica</title>
    </head>
    <body>
        <h1>Multiplicando em PHP</h1>
        <?php
            // Referencia as constantes e funções contidas
            // em arquivos PHP externos
            require("constante.php");
            include("funcoes.php");
            // Executa uma função de um arquivo externo
            echo multiplica(dois, quatro);
        ?>
        
    </body>
</html>