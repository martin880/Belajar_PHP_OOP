<?php

class Manager{
    var string $name;

    var string $title;

    public function __construct(string $name="", string $title=""){
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void //kata kunci void berfungsi untuk tidak mengembalikan value
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager { // extends digunakan sebagai turunan dari class sebelumnya
    
    // mengoveridde parent construct 
    public function __construct(string $name = ""){
        // tidak wajib, tapi direkomendasikan
        parent::__construct($name, "VP");
    }

    // functionOveridding atau menimpa function dari parent class manager diatas
    function sayHello(string $name): void //kata kunci void berfungsi untuk tidak mengembalikan value
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}