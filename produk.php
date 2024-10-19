<?php

class Produk{

    public $judul = "Judul",
            $penulis = "Penulis",
            $penerbit = "Penerbit",
            $harga = 0;


            public function getLabel() {
                return "$this->penulis, $this->penerbit";
            }
}

$produk3 = new Produk();
$produk3 ->judul ="Naruto";
$produk3 ->penulis = "masashi";
$produk3 ->penerbit = "Shonen Jump";
$produk3 ->harga = 30000;


$produk4 = new Produk();
$produk4 ->judul ="sasuke";
$produk4 ->penulis = "masashi";
$produk4 ->penerbit = "Shonen Jump";
$produk4 ->harga = 30000;

echo "komik :" . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();