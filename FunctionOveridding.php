<?PHP

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Martin";
$manager->sayHello("Iska");

$vp = new VicePresident();
$vp->name = "Iska";
$vp->sayHello("Martin");

// function overridding = mendeklarasikan ulang function yang ada di parent class nya.