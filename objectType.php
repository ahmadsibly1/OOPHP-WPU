<?php

// Studi kasus produk
// menjual komik dan game

class Produk
{

    public  $judul, $penulis, $penerbit, $harga;

    public function __construct($judul  = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 3000)
    { //parameter di atas itu berbeda dg param dari property
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getlabel()} harga {$produk->harga}";
        return $str;
    }
}


$produk3 = new Produk("Naruto", "masbli", "gramed", 300000);

$produk4 = new Produk("Mobile Legends", "abi yala", " Moontoon", 400000);

echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();
echo "<br>";

// instansiasi class cetakInfoProduk
$infoproduk1 = new CetakInfoProduk;
echo $infoproduk1->cetak($produk3);
