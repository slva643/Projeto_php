<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Continuando a estudar array</title>
    </head>
    <body>
        <h1>Aqui cointinuamos a estudar arrays</h1>
        <h1>Declarando o índice de um array</h1>
        <?php
            $array = array("U", "N", "I", "A", "S", "S", "E");
            $array["meio"] = "LV";
            $array["ultimaLetra"] = "I";
            print_r($array);
        ?>

        <h1>Imprimindo o array:</h1>
        <?php
            foreach ($array as $valor){
                echo $valor;
            }
        ?>
        <h1>Imprimindo o array com quebra de linha:</h1>
        <?php
            foreach($array as $valor){
                echo $valor."<br>";
            }
        ?>
    </body>
</html>