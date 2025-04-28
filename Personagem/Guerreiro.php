<?php

class Guerreiro extends Personagem implements PersonagemInterface{
    
    #[\Override]
    public function exibirFicha() {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Atributo</th><th>Valor</th></tr>";
        echo "<tr><td>Classe</td><td>{$this->classe->value}</td></tr>";
        echo "<tr><td>Raça</td><td>{$this->raca->value}</td></tr>";
        echo "<tr><td>Força</td><td>{$this->forca}</td></tr>";
        echo "<tr><td>Destreza</td><td>{$this->destreza}</td></tr>";
        echo "<tr><td>Constituição</td><td>{$this->constituicao}</td></tr>";
        echo "<tr><td>Inteligência</td><td>{$this->inteligencia}</td></tr>";
        echo "<tr><td>Sabedoria</td><td>{$this->sabedoria}</td></tr>";
        echo "<tr><td>Carisma</td><td>{$this->carisma}</td></tr>";
        echo "<tr><td>Vida Máxima</td><td>{$this->vidaMaxima}</td></tr>";
        echo "<tr><td>Mana Máxima</td><td>{$this->manaMaxima}</td></tr>";
        echo "<tr><td>Classe de Armadura</td><td>{$this->classeArmadura}</td></tr>";
        echo "</table>";
    }
}
