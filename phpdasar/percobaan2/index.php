<?php
    //komentar satu baris (ctrl+/)
    /*
        beberapa baris
    */

    /* standar output
    echo dan print
    print_r (array)
    var_dump (variable) */

    /*
        echo "hai ini Lely";
        print "hai ini Maria";
        print_r("untuk array");
        var_dump("hai its @mariaakov_");
        echo true; //boleean
        echo false; //boleean
    */

    /* penulisan sintaks PHP
    1. PHP di dalam HTML
    2. HTML di dalam PHP

    1
        <h1>Halo, its <?php echo "@mariaakov_"; ?></h1>
    2
        <?php 
            echo "<h1>Hallo!</h1>";
        ?>
    */

    //variable dan tipedata

    /* variable
    $nama = "@mariaakov_";
    echo "$nama"; */

    /* operator
    aritmatika
    + - * / %
    $x = 10;
    $y = 20;
    echo $x * $y; */

    /* penggabungan string / connection / concat
    .
    $nama_depan = "Lely Maria";
    $nama_belakang = "Kova";
    echo $nama_depan . " " . $nama_belakang; */

    /* operator assigment
    =, +=, -=, *=, /=, %=, .=, !=
    $x = 1;
    $x +=5;
    echo $x; //(6)
    $nama = "lely";
    $nama .= " ";
    $nama .= "maria";
    echo $nama; //(lely maria) */

    /* perbandingan 
    <, >, <=, >=, ==
    var_dump(1 == "1); //(true) */

    /* identitas
    ===, !==
    var_dump(1 === "1); //(false) */

    /* logika
    &&, ||, !
    $x = 10;
    var_dump($x < 20 && $x % 2 == 0); //(true)
    $x = 30;
    var_dump($x < 20 && $x % 2 == 0); //(false) 
    $x = 30;
    var_dump($x < 20 || $x % 2 == 0); //(true) */

?>

    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar PHP</title>
    </head>
    <body>
    <h1>Halo, its <?php echo $nama; ?></h1>
    </body>
    </html> -->
