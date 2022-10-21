<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use App\Controller\ConsoleController;

$app = new Application("Calculator","1.0.0");
$app -> add(new ConsoleController());
$app ->run();
