<?PHP

class Product{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // cara mengakses/ngambil data yang diprivate
    public function getName(): string 
    {
        return $this->name;
    }

    public function getPrice(): int 
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{
    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
    }
}

// Access Level
// Public adalah default, bisa diakses dari dalam class yang sama, bisa diakses oleh subclass/turunan dan diluar class.
// Protected bisa diakses dari dalam class yang sama, bisa diakses oleh subclass/turunan tetapi tidak bisa diakses diluar class.
// Private tidak bisa diakses dari manapun kecuali dari class nya sendiri.