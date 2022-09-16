<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset = "UTF-8">
    </head>
<body>
<?php
    /**
     * Demostração de if em PHP
     * De acordo com o valor da variável $saldoBancario
     *O resultado do programa pode varia.
     */

     $saldoBancario = 42389.50;
     if ($saldoBancario >= 42390){
        echo "Vou compar o carro 0Km :-D";
     }else {//O elese é opcional
        echo "Vou comprar um carro usado :>-|";
     }
?>
</body>
</html>