<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta chasert="UTF-8">
        <title>Estudando arrays em PHP</title>
    </head>
    <body>
        <?php
            // Declaração de um array
            // Note que podemos inserir tanto tipos
            // numéricos quanto strings
            // Em seguida obtemos o valor de cada posição do array
            // Utilizando o nome da variável seguido do índice da posição
            // entre colchetes
            // Note que o índece inicial em zero
            $meuPrimeiroArray = array(1, 2, 3, "Quatro", 5);
            echo $meuPrimeiroArray[0]."<br/>";
            echo $meuPrimeiroArray[1]."<br/>";
            echo $meuPrimeiroArray[2]."<br/>";
            echo $meuPrimeiroArray[3]."<br/>";
            echo $meuPrimeiroArray[4]."<br/>";

            // Declaração de uma array vazio
            $arrayVazio = array();

            // Note que a variável do array está definida
            if (isset($arrayVazio)){
                echo "O array vazio está declarado! <br/>";
            }
            // Porém nenhum índice possui valor
            //por exemplo, tentaremos acessar o índece zero
            if (isset($arrayVazio[0])){
                //Não vai passar aqui!
                echo "A primeira posição dp array vazio está declarada.<br/>";
            }
        ?>


        <h1>Imprimindo arrays com print_r</h1>
            <?php
                print_r($meuPrimeiroArray);
                echo "<br/>";
                print_r($arrayVazio);
            ?>
            <h1>Removendo elementos de arraus em PHP</h1>
            <?php
                unset($meuPrimeiroArray[1]);
                print_r($meuPrimeiroArray);
                echo "<br/>";
                if (isset($meuPrimeiroArray[2])){
                    echo "Ainda está declarado!<br/>";
                }
                else{
                    echo "Foi destruído!<br/>";
                }
            ?>

            <h1>Contando os elementos de array</h1>
            <?php
                echo count($meuPrimeiroArray);
                echo "<br/>";
                echo sizeof($meuPrimeiroArray);
                echo "<br/>"
            ?>
    </body>
</html>