<?php

require_once "Data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Martin");
$person->hello("Iska");

$person->name = "Puppy";
var_dump($person);

$person->run();


// Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function.
// yang membedakan, di trait bisa kita tambahkan ke dalam class lebih dari satu.
// trait mirip seperti extension, dimana kita bisa menambahkan konkrit function ke dalam class dengan trait