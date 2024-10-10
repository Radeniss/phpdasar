<?php
// superglobal
// variabel global milik php
// meripakan array aassosiative
$mahasiswa = [
    [
        "nama" => "Mohammad Radenis Stevano Mahelbe",
        "nim" => 220170208,
        "prodi" => "Teknik Informatika",
        "email" => "radenis354@gmail.com",
        "gambar" => "mahel.jpg"
    ],
    [
        "nama" => "Sayid Muhammad Jundullah",
        "nim" => 220170045,
        "prodi" => "Teknik Informatika",
        "email" => "sayidmuhammad@gmail.com",
        "gambar" => "sayid.jpg"
    ],
    [
        "nim" => 220170046,
        "nama" => "Rafli Hamdan Farabi",
        "prodi" => "Teknik Industri",
        "email" => "raflihamdan@gmail.com",
        "gambar" => "rafli.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?
                &nama=<?= $mhs["nama"]; ?>
                &nim=<?= $mhs["nim"]; ?>
                &prodi=<?= $mhs["prodi"]; ?>
                &email=<?= $mhs["email"]; ?>
                &gambar=<?= $mhs["gambar"]; ?>">
                    <?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>