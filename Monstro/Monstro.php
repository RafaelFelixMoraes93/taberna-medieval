<?php

abstract class Monstro {
    protected $nome;
    protected $vida;
    protected $classeArmadura;
    protected $dano;
    
    public function getNome() {
        return $this->nome;
    }

    public function getVida() {
        return $this->vida;
    }

    public function getClasseArmadura() {
        return $this->classeArmadura;
    }

    public function getDano() {
        return $this->dano;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setVida($vida): void {
        $this->vida = $vida;
    }

    public function setClasseArmadura($classeArmadura): void {
        $this->classeArmadura = $classeArmadura;
    }

    public function setDano($dano): void {
        $this->dano = $dano;
    }
    
    public function receberDano($dano) {
        $this->vida -= $dano;
        if ($this->vida < 0) {
            $this->vida = 0; // Impede que a vida fique negativa
        }
    }

    // Verifica se o monstro está morto
    public function estaMorto() {
        return $this->vida <= 0;
    }
}
