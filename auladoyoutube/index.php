<?php
//OBJECT (OBJETO)   

    class carro {
        public $cor;
        public $modelo;
        public function __construct($cor, $modelo){
            $this->cor = $cor;
            $this->modelo = $modelo;
        }


        public function mensagem(){
            return "O carro é $this->cor e o modelo $this->modelo >";
        }

    }
    $carro1 = new carro ("Branco", "Fusca");
    $carro2 = new carro ("Vermelha", "Ferrari");

    //echo $carro2->mensagem();
    //echo $carro1->mensagem();
    var_dump($carro1->modelo);
?>
<?php 
    class violao{
        public $modelo;
        public $corda;
        public function __construct($modelo, $corda){
            $this->modelo = $modelo;
            $this->corda = $corda;
        }
        public function mensagem(){
            return "A marca do violão é $this->modelo e as corda de $this->corda";
        }
    }
    $violao = new violao("tagima", "aço");
    echo ($violao->mensagem());
?>