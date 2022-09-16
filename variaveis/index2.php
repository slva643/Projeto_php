<?php 
    class MinhaClasse {
        public $codigo = 0;
        public $nome = "";
        function setNome($nome){
            $this -> nome = $nome;
        }
        function getNome(){
            return $this -> nome;
        }
        function setCodigo($codigo){
            $this -> codigo = $codigo;
        }
        function getCodigo(){
            return $this -> codigo;
        }
    }
    $obj = new MinhaClasse();
    $obj-> setCodigo(1020);
    $obj-> setNome("Marcio");
    $obj-> setCodigo(1021);
    $obj-> setNome("Julia");
    $obj-> setCodigo(1022);
    $obj-> setNome("José");
    $obj-> setCodigo(1023);
    $obj-> setNome("Joana");
    echo $obj->getNome();
?>