<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

echo Helper\APPLICATION . PHP_EOL;

Helper\helpMe();