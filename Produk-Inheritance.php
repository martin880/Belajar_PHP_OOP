<?php

class Produk
{
    // Property => mereprensentasikan data/keadaan dari sebuah objek
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0;


    // Contruct => method special yang dimiliki oleh Class
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // method => merepresentasikan perilaku dari sebuah objek
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        // Komik : Naritik Naoto | Martin, Sempurna Street (Rp. 11000000) - 100 Halaman
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


// Dengan menggunakan contruct instance nya menjadi seperti ini
$produk1 = new Komik("Naritik Naoto", "Martin", "Sempurna Street", 11000000, 100, 0);
$produk2 = new Game("Game cacing cacing", "Iska", "Langkat Group", 112000000, 0, 50);

// echo "Komik : " . $produk1->getLabel();
// echo PHP_EOL;
// echo "Game : " . $produk2->getLabel();
// echo PHP_EOL;

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);
// echo PHP_EOL;
// echo $infoProduk1->cetak($produk2);

echo $produk1->getInfoProduk();
echo PHP_EOL;
echo $produk2->getInfoProduk();
