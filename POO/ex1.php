<?php

$categories = [];

$categories[] = 'infantil';
$categories[] = 'adolescente';
$categories[] = 'adulto';
$categories[] = 'idoso';


print_r($categories);

$nome = 'Eric';
$idade = 18;

var_dump($nome);

if($idade >= 6 && $idade <= 12) 
{
    for($i = 0; $i < count($categories); $i++) {
        if($categories[$i] == 'infantil'){
        echo "O nadador $nome irá competir na categoria infantil.";
        }
    }
} 
else if($idade >= 13 && $idade <= 17) 
{
    for($i = 0; $i < count($categories); $i++) {
        if($categories[$i] == 'adolescente'){
        echo 'O nadador '. $nome .' irá competir na categoria adolescente.';
        }
    }
} 
else 
{
    for($i = 0; $i < count($categories); $i++) {
        if($categories[$i] == 'adulto') {
        echo 'O nadador '. $nome .' irá competir na categoria adulto.';
        }
    }
}
echo PHP_EOL;
$texto = 'Teste de escrita mano velhor';

echo mb_substr($texto, 8, 4);

echo date('d-m-y H-i-s');