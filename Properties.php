<?php

require_once "Data/Person.php";

$person = new Person("Martin", "Medan");
$person->name = "Martin";
$person->address = "Medan";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" .PHP_EOL;
echo "Address : $person->address" .PHP_EOL;
echo "Country : $person->country" .PHP_EOL;

$person2 = new Person("Iska", "Langkat");
$person2->name = "Iska";
$person2->address = "Langkat";
$person2->country = "Indonesia";

var_dump($person2);
