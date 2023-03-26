<?php 
require_once 'Motor.php';
require_once 'backend.php';

class Carro extends Motor {

    public $montadora;
    public $cor;
    public $modelo;
    private $chassi;

    public function __construct($montadora, $cor, $modelo) {
        $this->montadora = $montadora;
        $this->cor = $cor;
        $this->modelo = $modelo;
        $this->setChassi();
    }
    public function dirigir() {
        if ($this->ligado) {
            echo "<p>o carro ta andando</p>";
        } else {
            echo "<p>O carro precisa estar ligado para andar!</p>";
        }
    }
    public function setChassi(): void {
        $this->chassi = gerarChassi();
    }
    public function getChassi() {
        return $this->chassi;
    }
}
?>