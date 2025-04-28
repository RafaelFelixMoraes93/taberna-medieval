<?php

abstract class Arma {
    protected $nome;
    protected $dano;
    
    public function getNome() {
        return $this->nome;
    }

    public function getDano() {
        return $this->dano;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDano($dano): void {
        $this->dano = $dano;
    }


}
