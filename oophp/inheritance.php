<?php
    class Produk {
        public $judul, 
                $penulis, 
                $penerbit, 
                $harga,
                $jmlHalaman,
                $waktuMain;

        function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
        }

        function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        function getInfoProduk() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
    }

    class Komik extends Produk {
        function getInfoProduk() {
            $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }

    class Game extends Produk {
        function getInfoProduk() {
            $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
            return $str;
        }
    }

    class CetakInfoProduk {
        public function cetak(Produk $produk) {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
    }

    $produk1 = new Komik(
        "Naruto",
        "Masashi Kishimoto",
        "Shonen Jump",
        30000,
        100,
        0,
        "Komik"
    );

    $produk2 = new Game(
        "Uncharted",
        "Neil Druckmann",
        "Sony Computer",
        250000,
        0,
        50,
        "Game"
    );

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();