<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    //  ambil data dari tabel mahasiswa / query data mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // var_dump($result);

    /* ambil data (fetch) mahasiswa dari object result
    mysqli_fetch_row() / mengembalikan array numerik
    mysqli_fetch_assoc() / mengembalikan array associative
    mysqli_fetch_array() / mengembalikan keduanya
    mysqli_fetch_object() */

    /* $mhs = mysqli_fetch_row($result);
    var_dump($mhs[4]); */

    /* $mhs = mysqli_fetch_assoc($result);
    var_dump($mhs{"email"}); */

    /* $mhs = mysqli_fetch_array($result);
    var_dump($mhs); var_dump([1]); */ 

    /* $mhs = mysqli_fetch_object($result);
    var_dump($mhs->nama); */

    /* while ($mhs = mysqli_fetch_assoc($result)) {
        var_dump($mhs);
    } */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin!</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>
                    <a href="">Ubah</a> | <a href="">Hapus</a>
                </td>
                <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>