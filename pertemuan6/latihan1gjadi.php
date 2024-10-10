<?php
// array
// membuat array 
$hari = array("senin",   "selasa", "rabu", "kamis");
$bulan = ["janari", "frbruari", "maret", "april"];
$arr = [123, "mamank", true];
$arrdoble = [
    ["manggarok", 123, "mamang@gmail.com"],
    ["mang gacor", 456, "gacormang@gmail.com"]
];

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// menampilkan sebagian

var_dump($hari[0]);
echo "<br>";
print_r($bulan[0]);
echo "<br>";
echo $arr[0];
?>
<!-- menampilkan array -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan array</title>
</head>

<body>
    <h1>Menampilkan Array</h1>
    <?php foreach ($hari as $hr) : ?>
        <ul>
            <li><?= $hr; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>