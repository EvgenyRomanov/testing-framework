<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

echo '5 + 5 = ' . \App\Calculator::sum(5, 5) . PHP_EOL;
