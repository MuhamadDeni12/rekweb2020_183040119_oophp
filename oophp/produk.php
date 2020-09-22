<?php 	
		//Jual produk
		//Komik
		//Game
class Produk{
		public  $judul = "judul", 
				$penulis = "penulis",
				$penerbit = "penerbit", 
				$harga = 0;


}
/*$produk1 = new Produk;
$produk1->judul ="Naruto";
var_dump($produk1);

$produk2 = new Produk;
$produk2->judul ="Uncharted";
$produk2->tambahProperty="ahahahah"; 
var_dump($produk2);*/


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashashi Kishimoto";
$produk3->penerbit = "Shounen Jump";
$produk3->harga = 300000;
 echo "Komik : $produk3->penulis, $produk3->penerbit";