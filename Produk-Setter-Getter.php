<?php

class Produk
{
    // Property => mereprensentasikan data/keadaan dari sebuah objek
    private  $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $diskon = 0;


    // Contruct => method special yang dimiliki oleh Class
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method => merepresentasikan perilaku dari sebuah objek
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
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
$produk1 = new Komik("Naritik Naoto", "Martin", "Sempurna Street", 11000000, 100);
$produk2 = new Game("Game cacing cacing", "Iska", "Langkat Group", 112000000, 50);

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
echo PHP_EOL . "====================================================================";
echo PHP_EOL;

$produk2->setDiskon(40);

echo $produk2->getHarga();
echo PHP_EOL . "Setelah diskon 40% menjadi Rp.";
echo $produk2->getDiskon();
echo PHP_EOL . "====================================================================";
echo PHP_EOL;

$produk1->setJudul("Uchiha Sasule"); // mengganti nilai dari judul dengan method set
echo "Judul = " . $produk1->getJudul();
echo PHP_EOL;
echo "Harga = " . $produk1->getHarga();
echo PHP_EOL;
echo "Hari lahir saya adalah " . date("l", mktime(0, 0, 0, 3, 27, 1991));
