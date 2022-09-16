<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Variáveis</title>
    </head>
<body>
    <h1>Vamos estudar as variáveis!</h1>
    <h2>Variável nula:</h2>
    <?php
            /*Declara uma variável e deixa ela nula */
            $variavelnulo;
            echo "<p>.$variavelnulo.<p>"; //Aqui vai dar erro;-)
    ?>
<br>
    <h2>Variável String:</h2>
    <?php
            /*Declara uma variável String*/
            $variavelString123 = "um, dois, três";
            echo "<p>.$variavelString123.<p>";
    ?>
<br>
    <h2>Variável Integer:</h2>
   <?php
            /*Declara uma variável Interger*/
            $variavelInteger = 123;
            echo "<p>.$variavelInteger.<p>";
   ?>
<br>
   <h2>Variável Double:</h2>
   <?php
            /*Declara uma variável Double*/
             $variaveldouble = 0.24;
            echo "<p>.$variaveldouble.<p>";
   ?> 
</body>
</html>