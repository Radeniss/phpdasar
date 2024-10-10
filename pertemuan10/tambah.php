<?php
// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {
    // ambil data dari tiap elemen
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // query insert data 
    $query = "INSERT INTO mahasiswa VALUES ('','$nim','$nama','$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    // apakah data berhasil ditambhakan atau tidak  

    // var_dump(mysqli_affected_rows($conn));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>

<body>
    <h1>Tambah data mahsiswa</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">EMAIL : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">GAMBAR : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambahkan data!</button>
            </li>
        </ul>
    </form>
</body>

</html>