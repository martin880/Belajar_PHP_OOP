<?PHP

namespace Data;

// parent class
class Shape{
    public function getCorner(): int 
    {
        return 0;
    }
}

// class turunan
class Rectangle extends Shape{ 
    public function getCorner(): int 
    {
        return 4;
    }
    public function getParentCorner(): int 
    {
        // mengakses parent class
        return parent::getCorner();
    }
}