<?php 	
		
class Produk{
		private $judul, 
				$penulis,
				$penerbit,
				$harga,
				$diskon = 0;



		
				
		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;		
		}
		public function setJudul($judul){
			if( !is_string($judul)){
				throw new Exception("Judul Harus String");
				
			}
			$this->judul = $judul;
		}

		public function getJudul(){
			return $this->judul;
		}

		public function setPenulis( $penulis ){
			$this->penulis = $penulis;
		}
		public function getPenulis (){
			return $this->penulis;
		}
		public function setPenerbit( $penerbit){
			$this->penerbit = $penerbit;
		}
		public function getPenerbit(){
			return $this->Penerbit;
		}
		public function setHarga( $harga ){
			$this->harga = $harga;
		}

		public function getHarga(){
		return $this->harga - ( $this->harga * $this->diskon / 100);

	}
		public function setDiskon( $diskon){
			$this->diskon = $diskon;
		}
		public function getDiskon (){
			return $this->diskon;
		}

		
	
		

		public function getLabel(){
			return "$this->penulis, $this->penerbit";

		}
		public function getInfoProduk(){
			$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

			return $str;
		}
}
class Komik extends Produk {
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman= 0){

		parent::__construct($judul, $penulis , $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk(){
		$str = "Komik : " . parent ::getInfoProduk() ." - {$this->jmlHalaman} Halaman. ";

		return $str;
	}
}
class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit,$harga);

		$this->waktuMain = $waktuMain;
		
	}
	

	public function getInfoProduk(){
		$str = "Game : " . parent ::getInfoProduk() ." - {$this->waktuMain} Waktu Main ";

		return $str;
	}
}

class CetakInfoProduk {
	public $daftarProduk = array();

	
	public function Cetak( Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} , (Rp. {$produk->harga})";

		return $str;
	}

}


$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shounen Jump", 30000, 100);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);




