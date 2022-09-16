<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Variáveis </title>
    </head>
    <body>
        <h1>Vamos estudar as Variáveis!</h1>
        <h2>variaável nulo:</h2>
        <?php
            /* Declara uma variável e deixa ela nula */
            $variavelnulo;
            echo "<p>".$variavelnula."</p>"; //Aqui vai dar erro ;-) 
        ?>
        
        <br/>
            <h2>Variável string:</h2>
            
        <?php
              /* Declara um variável String*/
              $variavelString123 = "um, dois, três";
              echo "<p>".$variavelString123."</p>";
        ?>

        <br/>
        <h2>variavel Integer:</h2>
        <?php
            /*Declara  um variável Integer*/
            $variavelInteger = 123;
            echo "<p>".$variavelInteger."</p>";
        ?>

        </br>
        <h2>Variável Double:</h2>
        <?php
            /*Declara um variável Double */
            $variavelDouble = 0.24;
            echo "<p>".$variavelDouble."<p>";
        ?>
    </body>
</html>