<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'autoload.php';
        
        $adaga = new Adaga();
        
        
        $mago = new Mago("Draxido" ,RacaEnum::Anao, ClasseEnum::Mago);     
        $mago->exibirFicha();
        
        
        $goblin = new Goblin();
        $goblin->setNome("Zurgar");
        $goblin->exibirFicha();
        
        
        
        
        
        ?>
        </pre>
    </body>
</html>
