<?php

require_once "Data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Pussy";
$cat->run();

$dog = new Dog();
$dog->name = "Doggy";
$dog->run();