<?php

// Studi kasus produk
// menjual komik dan game

class Produk
{
    // membuat propert Produk
    // public $judul;
    // public $penulis;
    // public $penerbit;
    // public $harga;

    // best practice
    public  $judul = "Judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $poduk1 = new Produk();
// // mengisi atau menimpa nilai dari judul
// $produk1->judul = "Naruto";
// var_dump($poduk1);

// $produk2 = new Produk();
// // menmabah property baru : hati2 makanya jgn typo
// $produk2->propertybaru = "haha";

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "masbli";
$produk3->penerbit = "gramed";
$produk3->harga = 300000;

// echo "Komik $produk3->judul ditulis oleh $produk3->penulis dan diterbitkan oleh $produk3->penerbit";

$produk4 = new Produk();
$produk4->judul = "Mobile Legends";
$produk4->penulis = "Abiyala";
$produk4->penerbit = "Mooonton";
$produk4->harga = 4000000;

echo $produk4->getLabel();
echo "<br>";
echo $produk3->getLabel();
