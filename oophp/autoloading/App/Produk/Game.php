<?php
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