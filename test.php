<?php

require __DIR__ . '/vendor/autoload.php';

use Egorov\Sum;

$sum = new Sum();

echo $sum(12, 53) . "\n";
echo $sum(12, 53, 234) . "\n";
echo $sum(12, 53, 12, 64) . "\n";
echo $sum(12, 53, 547547, 34643, 545474) . "\n";
echo $sum(12) . "\n";
