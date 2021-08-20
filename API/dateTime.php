<?php

date_default_timezone_set('Brazil/East');

echo time() . PHP_EOL;

echo date('d/m/Y - H:i:s') . PHP_EOL;

echo strftime('%A, %d de %B de %Y', time()) . PHP_EOL;
setlocale(LC_TIME, 'portuguese.utf-8');
echo strftime('%A, %d de %B de %Y', time()) . PHP_EOL;

$tomorrow = time() + (60 * 60 * 24);
echo strftime('%A, %d de %B de %Y', $tomorrow) . PHP_EOL;

$fixDate = mktime(15, 30, 50, 1, 25, 1998);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $fixDate) . PHP_EOL;

$shape1 = 'D, d \d\e M \d\e Y';
$shape2 = '%A, %d de %B de %Y';
$shape3 = '%A, %d de %B de %Y - %H:%M:%S';

$now = new DateTime();
print_r($now);

echo $now->format($shape1) . PHP_EOL;
echo strftime($shape2, $now->getTimestamp()) . PHP_EOL;
echo strftime($shape3, $now->getTimestamp()) . PHP_EOL;

$date = new DateTime('1987-05-28 15:41:00');
echo strftime($shape3, $date->getTimestamp()) . PHP_EOL;

echo ($now > $date ? 'Maior' : 'Menor') . PHP_EOL;

$tmz = new DateTimeZone('Brazil/East');
$now2 = new DateTime(null, $tmz);
echo $now2->format('d/M/Y H:i:s');