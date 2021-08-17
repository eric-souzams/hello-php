<?php

namespace app\outro;

require('use.php');

echo __NAMESPACE__ . PHP_EOL;

echo \app\math\num . PHP_EOL;

use const app\math\num;

echo num . PHP_EOL;

use app\math as ctx;

echo ctx\sum(1, 2) . PHP_EOL;

use function app\math\sum as soma;

echo soma(3, 5) . PHP_EOL;

$obj = new \app\math\Classe();
$obj->func();

$obj2 = new ctx\Classe();
$obj2->func();