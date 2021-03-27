<?php

class Manager{
    var string $name;

    function sayHello(string $name): void //kata kunci void berfungsi untuk tidak mengembalikan value
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager { // extends digunakan sebagai turunan dari class sebelumnya
    function sayHello(string $name): void //kata kunci void berfungsi untuk tidak mengembalikan value
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}