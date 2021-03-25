<?php

class Person{
    const AUTHOR = "Martin Halomoan Lumbangaol";

    var string $name;
    var ?string $address = null; //nullable properties
    var string $country = "Indonesia"; //Properties default value

    function __construct(string $name, ?string $address){ // Menggunakan constructor
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if(is_null($name)){
            echo "Hi, my name is $this->name" . PHP_EOL; //kata kunci this untuk mengakses objek saat ini dimana si function itu berada
        }else{
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info(){
        echo "Author : " . self::AUTHOR .PHP_EOL; //mengakses kelas yang sama dengan kata kunci self
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" .PHP_EOL;
    }
}