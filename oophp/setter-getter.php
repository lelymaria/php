<?php
    class Produk {
        private $judul, 
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

        function getInfoProduk() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
    }

    class Komik extends Produk {
        public $jmlHalaman;

        function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }

        function getInfoProduk() {
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }

    class Game extends Produk {
        public $waktuMain;

        function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
            parent::__construct($judul, $penulis, $penerbit , $harga);
            $this->waktuMain = $waktuMain;
        }

        function getInfoProduk() {
            $str = "Komik : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
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

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
    echo "<hr>";

    echo $produk2->setDiskon(50);
    echo $produk2->getHarga();
    echo "<hr>";

    $produk1->setPenulis("Lely Maria Kova");
    echo $produk1->getPenulis();