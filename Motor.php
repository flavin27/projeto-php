<?php 
abstract class Motor {
    protected $ligado;

    protected function __construct() {
        $this->ligado = false;
    }
    public function ligar(): void {
        $this->setLigado(true);
    }
    public function desligar(): void {
        $this->setLigado(false);
    }
    private function setLigado(bool $estado): void {
        $this->ligado = $estado;
    }
}



?>