<?php
        /* == Contoh Static ==
    class ContohStatic {
        public static $angka = 1;

        static function halo() {
            return "Halo " . self::$angka++ . " kali.";
        }
    }

    echo ContohStatic::$angka;
    echo "<br>";
    echo ContohStatic::halo();
    echo "<hr>";
    echo ContohStatic::halo(); */

        /* == Contoh Tanpa Static ==
    class Contoh {
        public $angka = 1;

        function halo() {
            return "Halo " . $this->angka++ . " kali. <br>";
        }
    }

    $a = new Contoh();
    echo $a->halo();
    echo $a->halo();
    echo $a->halo();

    echo "<hr>";

    $aa = new Contoh();
    echo $aa->halo();
    echo $aa->halo();
    echo $aa->halo(); */

        //  == Contoh Gabungan Static == 
    class Contoh {
        public static $angka = 1;

        static function halo() {
            return "Halo " . self::$angka++ . " kali. <br>";
        }
    }

    $a = new Contoh();
    echo $a->halo();
    echo $a->halo();
    echo $a->halo();

    echo "<hr>";

    $aa = new Contoh();
    echo $aa->halo();
    echo $aa->halo();
    echo $aa->halo();
?>