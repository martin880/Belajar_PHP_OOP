<?php

require_once "Data/Person.php";

$iska = new Person("Iska", "Langkat");
$iska->name = "Iska";
$iska->sayHello("Martin");

$martin = new Person("Martin", "Medan");
$martin->name = "Martin";
$martin->sayHello(null);

$martin->info();
$iska->info();
