<?php
// In.
$geld = intval ($argv[1]);
var_dump($geld);
// 50 euro.
$vijftig = floor ($geld / 50);
echo "$vijftig x €50,-" . PHP_EOL;
$restvijftig = $geld % 50;
// 20 euro.
$twintig = floor ($restvijftig / 20);
echo "$twintig x €20,-" . PHP_EOL;
$resttwintig = $restvijftig % 20;
// 10 euro.
$tien = floor ($resttwintig / 10);
echo "$tien x €10,-" . PHP_EOL;
$rest = $resttwintig % 10;
// 5 euro.
$vijf = floor ($rest / 5);
echo "$vijf x €5,-" . PHP_EOL;
$restvijf = $rest % 5;
// 2 euro.
$twee = floor ($restvijf / 2);
echo "$twee x €2,-" . PHP_EOL;
$resttwee = $restvijf % 2;
// 1 euro.
$een = floor ($resttwee / 1);
echo "$een x €1,-" . PHP_EOL;