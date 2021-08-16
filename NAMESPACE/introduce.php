<?php

namespace context;

echo __NAMESPACE__ . PHP_EOL;

const const1 = 123;
define('context\const2', 147);
define(__NAMESPACE__ . '\const3', 798);
define('outro_context\const4', 159);

echo const1 . PHP_EOL;
echo const2 . PHP_EOL;
// echo context\const3;
echo \context\const3 . PHP_EOL; //idk, i think that is a bug.
echo \outro_context\const4 . PHP_EOL;

echo constant(__NAMESPACE__ . '\const3') . PHP_EOL;
