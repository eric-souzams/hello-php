<?php

class ConstructDestruct {

    public function __construct()
    {
        echo 'Fui construida';
    }

    public function run() {
        echo PHP_EOL . 'Rodei algo' . PHP_EOL;
    }

    public function __destruct()
    {
        echo 'Fui destruida';
    }

}

$obj = new ConstructDestruct();
$obj->run();