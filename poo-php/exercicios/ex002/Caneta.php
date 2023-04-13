<?php 
    class Caneta {
        public $modelo;
        public $cor;
        public $ponta;
        public $carga;
        public $tampada;

        public function rabiscar() {
            if ($this->tampada === true) {
                echo "<p>ERRO! Não posso rabiscar!</p>";
            } else {
                echo "<p>Estou rabiscando...</p>";
            }
        }

        public function escrever() {
            echo "Estou escrevendo";
        }

        public function tampar() {
            $this->tampada = true;
        }

        function destampar() {
            $this->tampada = false;
        }


    }

?>