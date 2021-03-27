<?PHP

require_once "Data/Product.php";

$product = new Product("Apple", 20000);

echo $product->getName() . PHP_EOL; // mengakses data yang diprivate
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();