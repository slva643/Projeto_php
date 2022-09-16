<!DOCTYPE html>
<html>
    <head>
        <neta charset = "UTF-8"/>
        <title>Strings</title>
    </head>
    <body>
        <h2>Estudando strings no PHP!</h2>
        <?php
            //Declaramos uma variável string para armazenar
            //o nome de uma linguagem de programação.
            $linguagemDeProgramacao = "PHP";
        ?>
        <h2>echo com aspas simples:</h2>
        <?php 
            echo '<p>Estudar $linguagemDeProgramacao é muito legal!! :-)</p>';
        ?>
        <h2>echo como aspas duplas</h2>
        <?php
            Echo "<p>Estudar $linguagemDeProgramacao é muito legal!! :-)</p>"
        ?>



        <h1>Vamos estudar o metodo print</h1>
        <?php
            // Declaramos uma variável string para armazenar 
            // o nome de uma instituição de ensino.
            $instituicaoDeEnsino = "UNIASSELVI";
        ?>
        <h2>print com aspas simples:</h2>
        <?php
            print '<p>Estudar na $instituicaoDeEnsino é muito legal!! :-)</p>';
        ?>
        <h2>print com aspas duplas:</h2>
        <?php
            print "<p>Estudar na $instituicaoDeEnsino é muito legal!! :-)</p>";
        ?>


        <h1>Estudando as funções trim()</h1>
        <h2>Removendo espaço em branco em volta da string</h2>
        <?php
            $stringComEspacosEmVolta = "   Três espaços em cada lado   ";
            echo "{".$stringComEspacosEmVolta."}<br/>";

            //Remove os espaços em branco em volta de string
                $stringComEspacosEmVolta = trim($stringComEspacosEmVolta);
                echo "{".$stringComEspacosEmVolta."}<br/>";
        ?>
        <h2>Removendo espaços em branco à esquerda da string</h2>
        <?php
            $stringEspacosAesquerda = "   Três espaços à esquerda   ";
            echo "{".$stringEspacosAesquerda."}<br/>";
            //Removendo o espaços em branco em volta da string
            $stringEspacosAesquerda = ltrim($stringEspacosAesquerda);
            echo "{".$stringEspacosAesquerda."}<br/>";
        ?>
        <h2>Removendo espaços em branco à direita da string</h2>
        <?php
            $stringEspacosAdireita = "   Três espaços à direita   ";
            echo "{".$stringEspacosAdireita."}<br/>";
            //Removendo o espaço em branco em volta da string
            $stringEspacosAdireita = rtrim($stringEspacosAdireita);
            echo "{".$stringEspacosAdireita."}<br/>";
        ?>

        <h1>Invertendo uma string em PHP</h1>
        <?php
            $stringNormal = "UNIASSELVI";
            $stringInvertida = strrev($stringNormal);
            echo $stringInvertida;
        ?>

        <h1>Mnipulando o CASE de strings em PHP</h1>
        <?php
            $variavelCaseMisturado = "com a UNIASSELVI, posso ver o meu futuro!";
        ?>
        <h2>Invertendo para minúscula:</h2>
        <?php
            echo strtolower($variavelCaseMisturado);
        ?>
        <h2>Invertendo para maiúscula:</h2>
        <?php
            echo strtoupper($variavelCaseMisturado);
        ?>
        <h2>Invertendo a primeira letras para maiúscola:</h2>
        <?php
            echo ucfirst($variavelCaseMisturado);
        ?>
        <h1>str_replace(): Substui uma string por outra dentro de</h1>
        <h1>Substituição de strings em PHP</h1>
        <?php
        $variavelTextoOriginal = "A diciplina Algoritmos é demais";
        $variavelExtoAleatorio = str_replace("Algoritmos","Programação Web I",$variavelTextoOriginal);
        echo $variavelExtoAleatorio;
        ?>

        
        <h1>strlen o tamanho da string</h1>
        <h1>Obtendo o tamanhpo de strings em PHP</h1>
        <?php
            $nomeBonito = "PHP";
            $tamanho = strlen($nomeBonito);
            echo "O nome ".$nomeBonito." possui ".$tamanho." letras";
        ?>
    </body>
</html>