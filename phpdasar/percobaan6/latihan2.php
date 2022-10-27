<?php
    /* $mahasiswa = [
        ["Lely", "2003075", "TI", "lelymariakova@gmail.com"],
        ["Dzikra", "1802017", "RPL", "dzikrafathin@gmail.com"]
    ]; */

    /* Array Associative
    definisinya sama seperti array numerik, kecuali
    key-nya adalah string yang kita buat sendiri */

    $mahasiswa = [
        [
            "nama" => "Lely", 
            "nim" => "2003075", 
            "prodi" => "TI", 
            "email" => "lelymariakova@gmail.com",
            "gambar" => "anna.jpg"
            // "tugas" => [70, 85, 97]
        ],
        [
            "nama" => "Dzikra", 
            "nim" => "1802017", 
            "prodi" => "RPL", 
            "email" => "dzikrafathin@gmail.com",
            "gambar" => "ceyeee.jpeg"
            // "tugas" => [80, 90, 97]
        ]
    ];

    // echo $mahasiswa[1]["tugas"][2];
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
            <li>
                <img src="img/<?php echo $mhs["gambar"]?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Program Studi : <?= $mhs["prodi"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>