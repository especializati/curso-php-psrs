<?php

require_once '../vendor/autoload.php';

use App\Controllers\HomeController as Home;
use ETI\DB\Database;

$home = new Home;
//echo $home->index();

$database = new Database;
var_dump($database->getConn());
