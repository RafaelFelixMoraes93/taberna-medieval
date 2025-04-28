<?php

class Goblin extends Monstro{
    public $arma;
    
    public function __construct() {
        $this->vida = 8;
        $this->classeArmadura = 12;   
        $this->arma = new Adaga();
    }
    
    public function exibirFicha() {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Atributo</th><th>Valor</th></tr>";
        echo "<tr><td>Raça</td><td>Goblin</td></tr>";  // Raça do Goblin
        echo "<tr><td>Vida</td><td>{$this->vida}</td></tr>";  // Vida
        echo "<tr><td>Classe de Armadura</td><td>{$this->classeArmadura}</td></tr>";  // CA
        echo "<tr><td>Arma</td><td>{$this->arma->getNome()}</td></tr>";
        echo "<tr><td>Dano da Arma</td><td>1D6</td></tr>";  // Dano da Adaga
        echo "</table>";

    }
    
    
}
