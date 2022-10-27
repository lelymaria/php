<?php
    $mahasiswa = [
        ["Lely Maria Kova", "2003075", "Teknik Informatika", "lelymariaakov@gmail.com"],
        ["Jannathan Firdaus Banich", "2003074", "Teknik Informatika", "firdausbanich@gmail.com"],
        ["Ica Natasya", "2003073", "Teknik Informatika", "icntsy@gmail.com"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <!-- <?php foreach ($mahasiswa as $m) : ?>
                <li><?= $m; ?></li>
            <?php endforeach; ?> -->
            <li>Nama : <?= $mhs[0] ?></li>
            <li>NIM : <?= $mhs[1] ?></li>
            <li>Program Studi : <?= $mhs[2] ?></li>
            <li>Email : <?= $mhs[3] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>