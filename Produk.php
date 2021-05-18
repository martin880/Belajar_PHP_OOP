<?php

class Produk
{
    // Property => mereprensentasikan data/keadaan dari sebuah objek
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0,
        $tipe;


    // Contruct => method special yang dimiliki oleh Class
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // method => merepresentasikan perilaku dari sebuah objek
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        // Komik : Naritik Naoto | Martin, Sempurna Street (Rp. 11000000) - 100 Halaman
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } elseif ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

// Instance
// $produk3 = new Produk();
// $produk3->judul = "Naritik Naoto";
// $produk3->penulis = "Martin";
// $produk3->penerbit = "Sempurna Street";
// $produk3->harga = 11000000;

// Instance
// $produk4 = new Produk();
// $produk4->judul = "Game cacing cacing";
// $produk4->penulis = "Iska";
// $produk4->penerbit = "Langkat Group";
// $produk4->harga = 112000000;

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


// Dengan menggunakan contruct instance nya menjadi seperti ini
$produk1 = new Produk("Naritik Naoto", "Martin", "Sempurna Street", 11000000, 100, 0, "Komik");
$produk2 = new Produk("Game cacing cacing", "Iska", "Langkat Group", 112000000, 0, 50, "Game");

// echo "Komik : " . $produk1->getLabel();
// echo PHP_EOL;
// echo "Game : " . $produk2->getLabel();
// echo PHP_EOL;

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);
// echo PHP_EOL;
// echo $infoProduk1->cetak($produk2);

echo $produk1->getInfoLengkap();
echo PHP_EOL;
echo $produk2->getInfoLengkap();
