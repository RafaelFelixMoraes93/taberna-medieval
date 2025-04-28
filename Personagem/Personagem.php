<?php

abstract class Personagem {  
    protected $nome;
    protected $forca;
    protected $destreza;
    protected $constituicao;
    protected $inteligencia;
    protected $sabedoria;
    protected $carisma;
    protected $vidaMaxima;
    protected $manaMaxima;
    protected $vida;
    protected $mana;
    protected $dano;

    protected RacaEnum $raca;
    protected ClasseEnum $classe;
    
    protected int $classeArmadura;
    
    protected $armaEquipada;


    public function __construct($nome, RacaEnum $raca,
            ClasseEnum $classe) {
                $this->nome = $nome;
                $this->classe = $classe;
                $this->raca = $raca;
                $this->atributosPorClasse();
                $this->atributosPorRaca();
                $this->vidaInicial();
                $this->vida = $this->vidaMaxima;
                $this->mana = $this->manaMaxima;
                $this->manaInicial();
                $this->calcularClasseArmadura();                
                
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

        
    public function getVida() {
        return $this->vida;
    }

    public function getMana() {
        return $this->mana;
    }

    public function setVida($vida): void {
        $this->vida = $vida;
    }

    public function setMana($mana): void {
        $this->mana = $mana;
    }

        
    public function getForca() {
        return $this->forca;
    }

    public function getDestreza() {
        return $this->destreza;
    }

    public function getConstituicao() {
        return $this->constituicao;
    }

    public function getInteligencia() {
        return $this->inteligencia;
    }

    public function getSabedoria() {
        return $this->sabedoria;
    }

    public function getCarisma() {
        return $this->carisma;
    }

    public function getVidaMaxima() {
        return $this->vidaMaxima;
    }

    public function getManaMaxima() {
        return $this->manaMaxima;
    }

    public function getRaca(): RacaEnum {
        return $this->raca;
    }

    public function getClasse(): ClasseEnum {
        return $this->classe;
    }

    public function getClasseArmadura(): int {
        return $this->classeArmadura;
    }

    public function setForca($forca): void {
        $this->forca = $forca;
    }

    public function setDestreza($destreza): void {
        $this->destreza = $destreza;
    }

    public function setConstituicao($constituicao): void {
        $this->constituicao = $constituicao;
    }

    public function setInteligencia($inteligencia): void {
        $this->inteligencia = $inteligencia;
    }

    public function setSabedoria($sabedoria): void {
        $this->sabedoria = $sabedoria;
    }

    public function setCarisma($carisma): void {
        $this->carisma = $carisma;
    }

    public function setVidaMaxima($vidaMaxima): void {
        $this->vidaMaxima = $vidaMaxima;
    }

    public function setManaMaxima($manaMaxima): void {
        $this->manaMaxima = $manaMaxima;
    }

    public function setRaca(RacaEnum $raca): void {
        $this->raca = $raca;
    }

    public function setClasse(ClasseEnum $classe): void {
        $this->classe = $classe;
    }

    public function setClasseArmadura(int $classeArmadura): void {
        $this->classeArmadura = $classeArmadura;
    }
    
    public function getDano() {
        return $this->dano;
    }

    public function setDano($dano): void {
        $this->dano = $dano;
    }
    
        
    private function atributosPorRaca() {
        switch ($this->raca) {
            case RacaEnum::Humano:
                $this->constituicao +=2;
                break;
            
            case RacaEnum::Elfo:
                $this->destreza += 2;
                break;
            
            case RacaEnum::Anao:
                $this->constituicao += 2;
                break;
            
            case RacaEnum::Orc:
                $this->forca += 2;
                break;
            
            default:
                break;
        }
    }
    
    private function atributosPorClasse() {
        switch ($this->classe) {
            case ClasseEnum::Mago:
                $this->inteligencia = 16;
                $this->sabedoria = 16;
                $this->constituicao = 8;
                $this->destreza = 10;
                $this->forca = 8;
                $this->carisma = 8;
                break;            
            case ClasseEnum::Guerreiro:
                $this->inteligencia = 8;
                $this->sabedoria = 8;
                $this->constituicao = 16;
                $this->destreza = 10;
                $this->forca = 18;
                $this->carisma = 10;
                break;            
            case ClasseEnum::Ladrao:
                $this->inteligencia = 14;
                $this->sabedoria = 8;
                $this->constituicao = 12;
                $this->destreza = 18;
                $this->forca = 8;
                $this->carisma = 10;
                break;            
            case
            ClasseEnum::Clerigo:
                $this->inteligencia = 8;
                $this->sabedoria = 18;
                $this->constituicao = 12;
                $this->destreza = 8;
                $this->forca = 8;
                $this->carisma = 16;
                break;            
            default:
                break;
        }
    }
    
    private function modificador(int $modificador) {
        return (int) floor($modificador -10) /2;
    }


    private function vidaInicial() {
        if($this->classe == ClasseEnum::Mago) {
            $this->vidaMaxima = 8 + $this->modificador($this->constituicao);
        } elseif ($this->classe == ClasseEnum::Guerreiro) {
            $this->vidaMaxima = 10 + $this->modificador($this->constituicao);
        } elseif ($this->classe == ClasseEnum::Ladrao) {
            $this->vidaMaxima = 9 + $this->modificador($this->constituicao);
        } elseif ($this->classe == ClasseEnum::Clerigo) {
            $this->vidaMaxima = 8 + $this->modificador($this->constituicao);
        }
    }
    
     private function manaInicial() {
        if($this->classe == ClasseEnum::Mago) {
            $this->manaMaxima = 8 + $this->modificador($this->inteligencia);
        } elseif ($this->classe == ClasseEnum::Guerreiro) {
            $this->manaMaxima = 10 + $this->modificador($this->inteligencia);
        } elseif ($this->classe == ClasseEnum::Ladrao) {
            $this->manaMaxima = 9 + $this->modificador($this->inteligencia);
        } elseif ($this->classe == ClasseEnum::Clerigo) {
            $this->manaMaxima = 8 + $this->modificador($this->inteligencia);
        }
    }
    
    private function calcularClasseArmadura() {
        $this->classeArmadura = 10 + $this->modificador($this->destreza);
    }
    
    public function receberDano($dano) {
        $this->vida -= $dano;
        if ($this->vida < 0) {
            $this->vida = 0;
        }
    }

    public function estaMorto() {
        return $this->vida <= 0;
    }
    
    public function equiparArma(Arma $arma) {
        if($this->armaEquipada) {
            echo "<p>{$this->getNome()} já está usando uma arma: {$this->armaEquipada}<p>";
            echo "<p>Para equipar uma nova arma, remova a que já está utilizando.</p>";
        } else {
            return $this->armaEquipada;
        }
    }
    
    
}
