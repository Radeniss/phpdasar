<?php
$mahasiswa = [
    ["Mohammad Radenis Stevano Mahelbe", 220170208, "Teknik Informatika", "radenis354@gmail.com"],
    ["Sayid Muhammad Jundulah", 220170045, "Teknik Informatika", "sayidmuhammad@gmail.com"],
    ["Rafli Hamdan Farabi", 220170209, "Teknik Industri", "rafhamdan@gmail.com"],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<title>Daftar Mahasiswa</title>

<body>

    <h1>Daftar Mahasiswa</h1>

    <!-- <ul> -->
    <!-- <li>Mohamad Radenis Stevano Mahelbe</li>
        <li>220170208</li>
        <li>Teknik Informatika</li>
        <li>radenis354@gmail.com</li>  cara 1-->
    <!-- <?php foreach ($mahasiswa as $mhs) :  ?>
            <li><?= $mhs ?></li>
        <?php endforeach; ?> cara 2 -->
    <!-- </ul> -->
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?= $mhs[0]; ?></li>
            <li>NIM :<?= $mhs[1]; ?></li>
            <li>Prodi :<?= $mhs[2]; ?></li>
            <li>Email :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>