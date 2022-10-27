<?php 
    /* Pengkondisian / Percabangan
    if else
    if else if else
    ternary
    switch */

    /* if
    $x = 20;
    if($x < 20) {
        echo "benar";
    } else {
        echo "salah";
    } */

    /* if else if else
    $x = 20;
    if($x < 20) {
        echo "benar";
    } else if($x == 20) {
        echo "bingo!";
    } else {
        echo "salah";
    } */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
    <?php for($i = 1; $i <= 5; $i++) : ?>
        <?php if ($i % 2 == 1) : ?>
            <tr class="warna-baris">
        <?php else: ?>
            <tr>
        <?php endif; ?>
            <?php for($j = 1; $j <= 5; $j++) : ?>
                <td> <?php  echo"$i,$j"; ?> </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </table>
</body>
</html>