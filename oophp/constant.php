<?php
    // define('NAMA', 'Lely');
    // echo NAMA;

    // echo "<br>";

    // const UMUR = 19;
    // echo UMUR;



    // class Coba {
    //     const NAMA = "Lely";
    // }

    // echo Coba::NAMA;



    // function coba() {
    //     return __FUNCTION__;
    // }

    // echo coba();



    class Coba {
        public $kelas = __CLASS__;
    }

    $a = new Coba();
    echo $a->kelas;
?>