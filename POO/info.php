<?php

//phpinfo();

$payload = [
  'name' => 'lucas',
  'age' => '21',
  'state' => 'DF',
  'status' => 'online',
  'active' => false
];

$data = [
  'joao',
  21,
  'DF',
  'online',
  false
];


$a = 5;
$b = 10;
$c = 15;

var_dump($c == $a);

//var_dump($payload);

echo uniqid() . PHP_EOL;
echo uniqid() . PHP_EOL;
echo uniqid() . PHP_EOL;

echo password_hash('minhasenha123', PASSWORD_BCRYPT);