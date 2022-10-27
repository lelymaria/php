<?php
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
