<?php

class Visibilidade {

    public $publico = 'Visibilidade Publica';
    protected $protegido = 'Visibilidade Protegida';
    private $privado = 'Visibilidade Privada';

    public function show()
    {
        echo $this->publico . PHP_EOL;
        echo $this->protegido . PHP_EOL;
        echo $this->privado . PHP_EOL;
    }

    private function notShow()
    {
        echo 'Not will show nothing on main code';
    }

}

class A extends Visibilidade {

    public function showNow()
    {
        echo $this->publico . PHP_EOL;
        echo $this->protegido . PHP_EOL;
        // echo $this->privado . PHP_EOL;
    }

}

$obj = new Visibilidade();
$obj->show();
// $obj->notShow();

$obj2 = new A();
$obj2->show();
$obj2->showNow();