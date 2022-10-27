<?php
        // koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "phpdasar");

        function query($query) {
            global $conn;
            $result = mysqli_query($conn, $query);
            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }

        function tambah($data) {
            global $conn;
            // ambil data dari tiap elemen dalam form
            $nama = htmlspecialchars($data["nama"]);
            $nim = htmlspecialchars($data["nim"]);
            $jurusan = htmlspecialchars($data["jurusan"]);
            $email = htmlspecialchars($data["email"]);
            $gambar = htmlspecialchars($data["gambar"]);

                    // query insert data 
            $query = "INSERT INTO mahasiswa VALUES
                ('', '$nama', '$nim', '$jurusan', '$email', '$gambar')";
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
        }

        function hapus($id) {
            global $conn;
            mysqli_query($conn, "DELETE FROM mahasiswa where id = $id");
            return mysqli_affected_rows($conn);
        }

        function ubah($data) {
            global $conn;
            // ambil data dari tiap elemen dalam form
            $id = $data["id"];
            $nama = htmlspecialchars($data["nama"]);
            $nim = htmlspecialchars($data["nim"]);
            $jurusan = htmlspecialchars($data["jurusan"]);
            $email = htmlspecialchars($data["email"]);
            $gambar = htmlspecialchars($data["gambar"]);

                    // query insert data 
            $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                jurusan = '$jurusan',
                email = '$email',
                gambar = '$gambar'
                WHERE id = $id";

            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
        }
?>