<?php

require_once "Data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Martin");
var_dump($company);

$company->programmer = new BackendProgrammer("Martin");
var_dump($company);

$company = new FrontendProgrammer("Martin");
var_dump($company);

sayHelloProgrammer(new Programmer("Martin"));
sayHelloProgrammer(new BackendProgrammer("Martin"));
sayHelloProgrammer(new FrontendProgrammer("Martin"));

// polymorphism -> kemampuan sebuah objek berubah bentuk menjadi bentuk lain