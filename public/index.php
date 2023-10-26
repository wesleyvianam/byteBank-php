<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\ByteBank\Domain\Banco;

$accountThais = new Banco("Thais",123, 300.00);
$accountNikolas = new Banco("Nikolas",124, 500.00);
$accountWesley = new Banco("Wesley",125, 700.00);

echo $accountThais . PHP_EOL;
echo $accountNikolas . PHP_EOL;
echo $accountWesley . PHP_EOL;
