<?php

class Adaga extends Arma{
    public $dano;
    
    public function getDano() {
        return $this->dano;
    }

    public function setDano($dano): void {
        $this->dano = $dano;
    }

        
    public function __construct() {
        $this->nome = 'Adaga';
        $this->dano = new Dado;
    }
    
    public function rolarDano() {
        return $this->dano->rolarDado();
    }
}
