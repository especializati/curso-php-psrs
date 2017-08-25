<?php

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Nome do Log');
$log->pushHandler(new StreamHandler('logs.log', Logger::WARNING));

// add records to the log
$log->warning('Foo', [1,2,3,4]);
$log->error('Bar', ['carlos', 'ferreira', 'especializati']);
