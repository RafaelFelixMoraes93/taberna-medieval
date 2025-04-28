<?php

class Dado {
    private $numero;
    
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero): void {
        $this->numero = $numero;
    }

    public function rolarDado() {
        return random_int(1, $this->numero);
    }
}
