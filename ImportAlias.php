<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use Data\One\Conflict as conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();

echo APP . PHP_EOL;

// menggunakan alias ketika mengimport function class atau function menggunakan kata kunci use