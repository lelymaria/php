<?php
    /* array
    variabel yang dapat menyimpan banyak nilai 
    elemen pada array boleh memiliki tipe data yang berbeda
    pasangan antara key dan value
    key-nya adalah index, yang dimulai dari 0
    - cara lama
    $hari = array("Senin", "Selasa", "Rabu");

    - cara baru
    $bulan =["Januari", "Februari", "Maret"];
    $arr1 = [123, "tulisan", false]; */

    /* menampilkan Array
    var_dump / print_r */
    $hari = array("Senin", "Selasa", "Rabu");
    $bulan =["Januari", "Februari", "Maret"];
    $arr1 = [123, "tulisan", false]; 

    /* menampilkan Array
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>"; */

    /* menampilkan suatu elemen pada Array
    echo $arr1[0];
    echo "<br>";
    echo $bulan[1]; */

    // menambahkan elemen baru pada Array 
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jum'at";
    echo "<br>";
    var_dump($hari);
?>