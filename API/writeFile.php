<?php

$arquivo = fopen('teste.txt', 'w');

fwrite($arquivo, "Valor inicial\n");

$str = "Segunda linha\n";

fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "Segundo Valor inicial\n");
fwrite($arquivo, "Terceiro Valor inicial\n");

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 80);