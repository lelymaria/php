<?php
    /* Variable Scope / lingkup variabel
    $x = 10;
    function tampilX() {
        global $x;
        echo $x;
    }
    tampilX();
    echo "<br>";
    echo $x; */

    /* SUPERGLOBALS
    variable global milik PHP
    merupakan Array Associative
    var_dump($_SERVER);
    echo $_SERVER["SEVER_NAME"]; */

    /* $_GET
    $_GET["nama"] = "Lely Maria Kova";
    $_GET["nim"] = "2003075";
    var_dump($_GET); */

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&prodi=<?= $mhs["prodi"]; ?>&email=<?= $mhs["email"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>