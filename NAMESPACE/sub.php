<?php

namespace App;

echo __NAMESPACE__ . PHP_EOL;
const name = 123;

namespace App\Principal;
echo __NAMESPACE__ . PHP_EOL;
const name = 147;

namespace App\Principal\Http;
echo __NAMESPACE__ . PHP_EOL;
const name = 159;


echo \App\name . PHP_EOL;
echo \App\Principal\name . PHP_EOL;
echo \App\Principal\Http\name . PHP_EOL;