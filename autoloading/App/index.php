<?php

require_once './autoloading/App/init.php';

// Dengan menggunakan contruct instance nya menjadi seperti ini
$produk1 = new Komik("Naritik Naoto", "Martin", "Sempurna Street", 11000000, 100);
$produk2 = new Game("Game cacing cacing", "Iska", "Langkat Group", 112000000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
