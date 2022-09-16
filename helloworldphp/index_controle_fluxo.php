<?php
    /** Demostração de if em php
     *  De acordo com o valor da variável $saldoBancario
     *  O resultado do programa pode variar.
     */

     $saldoBancario = 4289.50;
     if ($saldoBancario >= 42390){
        echo "Vou comprar um carro 0km :-D";
     }else{//O else é opcional.
        echo "Vou comprar um carro usado :-|";
     }
?>
<br><br>
<?php 
   /** Demostrção de switch em PHP
    * Mensagem de erro/sucesso para validação de formulários.
    * O algoritmo monta a mensagem de erro de acordo com 
    * a quantidade de erros encontrada.
    */

    $quantidadeErros = 3; // Tem que ser maior ou igual ou igual a 0 
     switch ($quantidadeErros){
      case 0:
         $mensagemDeErro = "Nenhum";
         break;
      case 1:
         $mensagemDeErro = "Um";
         break;
      case 2:
         $mensagemDeErro = "Dois";
         break;
      default:
         $mensagemDeErro = "Mais de dois ";
     }
     $mensagemDeErro = "Erro(s) encontrado(s)";
     echo $mensagemDeErro;
?>

<h1>While</h1>
<?php 
   /**Demostração de while em PHP
    * O while recebe como parâmentro (entre parênteses)
    * Um valor booleano e permace em looping até quanto
    * a condição for verdadeora.
    */

    $contador = 0;
    while ($contador++ < 10) {
      echo $contador."<br />";
    }
?>
<br><br>
<?php
   /**Demostração de for em PHP
    * O for recebe três parâmentros (entre parêrentese, separados por ponto e vírgulas(;))
    * O primeiro é um booleano que define até quando o looping será executado o terceiro é
    * um incremento para o contador 
    */

    for ($contador = 1; $contador <= 10; $contador ++){
      echo $contador."<br/>";
    }
?>

<h1>A variável não está declarada:</h1>
<?php
   // Declara uma variável poréwm deixa-a nula:
   $variavel;
   if (isset($variavel)){
      echo "Avarável está declarada!";
   }
   else{
      echo "A variável não está declarada!"; //aqui :-)
   }
?>
<h1>A variável está declarada:</h1>
<?php
   // Declara uma variável e a inicializa:
   $variavel = "variável";
   if (isset($variavel)){
      echo "A variável está declarada!"; // aqui :-)
   }
   else{
      echo "A variável não está declado!";
   }
?>