<?php

use Produk as GlobalProduk;

class Produk{
  public $judul,
          $penulis,
          $penerbit,
          $harga;

  //Constructor
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  //Method
  public function getLabel(){
    return "$this->penulis, $this->penerbit";
  }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",25000);
$produk3 = new GlobalProduk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
