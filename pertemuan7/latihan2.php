<?php
// cek apakah tidak ada di $_GET
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["prodi"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["gambar"] )
) {
    // redirect (memaksa kembali ke halaman sebelumnya)
    header("Location: latihan1.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>

    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["prodi"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>
    <a href=" latihan1.php">kembali ke halaman mahasiswa </a>
</body>

</html>