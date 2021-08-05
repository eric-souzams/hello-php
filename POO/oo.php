<?php

class Lata 
{
    public $marca;
    public $volume;
    private $formula;

    public function __construct(string $marca, int $volume, string $formula)
    {
        $this->marca = $marca;
        $this->volume = $volume;
        $this->formula = $formula;
    }

}

$latinhaDeMonster = new Lata('Monster', 473, 'Alguma formula');
$latinhaDeMonster->volume = 500;
// $latinhaDeMonster->marca = "Monster";

$latinhaDeNeston = new Lata('Nestlé', 700, 'Outras formula');
// $latinhaDeNeston->marca = "Nestlé";
// $latinhaDeNeston->volume = 700;

var_dump($latinhaDeMonster);
var_dump($latinhaDeNeston);