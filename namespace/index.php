<?php

require_once 'App/init.php';

// Dengan menggunakan contruct instance nya menjadi seperti ini
// $produk1 = new Komik("Naritik Naoto", "Martin", "Sempurna Street", 11000000, 100);
// $produk2 = new Game("Game cacing cacing", "Iska", "Langkat Group", 112000000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// membuat alias, atau nama lain dari sebuah namespace untuk mempersingkat nama namespace yang panjang
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo PHP_EOL;
new ProdukUser();
