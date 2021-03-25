<?php

//mengakses method parent
require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Martin";
$manager->sayHello("Iska");

$vp = new VicePresident();
$vp->name = "Iska";
$vp->sayHello("Martin");