<?php
    interface InfoProduk {
        function getInfoProduk();
    }

    Abstract class Produk {
        protected $judul, 
                $penulis, 
                $penerbit,
                $harga,
                $diskon = 0;

        function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        function setJudul($judul) {
            $this->judul = $judul;
        }

        function getJudul() {
            return $this->judul;
        }

        function setPenulis($penulis) {
            $this->penulis = $penulis;
        }

        function getPenulis() {
            return $this->penulis;
        }

        function setPenerbit($penerbit) {
            $this->penerbit = $penerbit;
        }

        function getPenerbit() {
            return $this->penerbit;
        }

        function setHarga($harga) {
            $this->harga = $harga;
        }

        function getHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        function setDiskon($diskon) {
            $this->diskon = $diskon;
        }

        function getDiskon() {
            return $this->diskon;
        }

        function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        abstract function getInfo();
    }

    class Komik extends Produk implements InfoProduk {
        public $jmlHalaman;

        function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }

        function getInfo(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }

        function getInfoProduk() {
            $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }

    class Game extends Produk implements InfoProduk {
        public $waktuMain;

        function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
            parent::__construct($judul, $penulis, $penerbit , $harga);
            $this->waktuMain = $waktuMain;
        }

        function getInfo(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }

        function getInfoProduk() {
            $str = "Komik : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
            return $str;
        }
    }

    class CetakInfoProduk {
        public $daftarProduk = [];

        function tambahProduk (Produk $produk) {
            $this->daftarProduk[] = $produk;
        }

        public function cetak() {
            $str = "DAFTAR PRODUK : <br>";

            foreach ($this->daftarProduk as $p){
                $str .= "- {$p->getInfoProduk()} <br>";
            }
            return $str;
        }
    }

    $produk1 = new Komik(
        "Naruto",
        "Masashi Kishimoto",
        "Shonen Jump",
        30000,
        100,
        "Komik"
    );

    $produk2 = new Game(
        "Uncharted",
        "Neil Druckmann",
        "Sony Computer",
        250000,
        50,
        "Game"
    );

    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    echo $cetakProduk->cetak();