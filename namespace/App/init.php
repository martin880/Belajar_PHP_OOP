<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/CetakInfoProduk.php';

// require_once 'Service/User.php';


// fungsi autoloading standard php library atau spl mengganti cara manual dari require_once
spl_autoload_register(function ($class) {
    // untuk mengakalin untuk mengambil user saja, dengan fungsi explode untuk memecah sebuah string berdasarkan pemisah tertentu.
    // explode nya digunakan untuk memisah backslash, dan harus diisi backslash 2 kali, dan menjadi array.
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'Service/' . $class . '.php';
});
