<?php


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
        "email" => "sayidmuhammad@gmail.com",
        "gambar" => "rafli.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftra Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?php echo $mhs["gambar"]; ?>" </li>
            <li>nama :<?= $mhs["nama"] ?></li>
            <li>nim :<?= $mhs["nim"] ?></li>
            <li>prodi :<?= $mhs["prodi"] ?></li>
            <li>email :<?= $mhs["email"] ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>