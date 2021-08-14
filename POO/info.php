<?php

//phpinfo();

$payload = [
    'name' => 'lucas',
    'age' => '21',
    'state' => 'DF',
    'status' => 'online',
    'active' => false
];

print_r($payload);

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

$dados1 = [
    'name' => 'Joao',
    'age' => 28
];

$dados2 = [
    'profissao' => 'Padeiro',
    'desde' => '21/07/2020'
];

$juntar = $dados1 + $dados2;
print_r($juntar);

$indice = array_rand($juntar);
echo $indice . ' = ' . $juntar[$indice];

$dados = [
    'person_2' => [
        'name' => 'Joao',
        'age' => 25,
        'from' => 'Brazil'
    ],
    'person_1' => [
        'name' => 'Pedro',
        'age' => 35,
        'from' => 'China'
    ]
];

print_r($dados);
echo $dados['person_1']['name'];

array_multisort($dados);
print_r($dados);

sort($dados); //perde key pereson
print_r($dados);