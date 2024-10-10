<?php
// array
// variabel yg dapat memiliki banyak nilai
//elemen pada array bisa tipe data yg berbeda
$nama = "mahelbee";

// cara buat array
// cara lama
$hari = array("senin", "selasa", "rabu", "kamis", "jumat", "sabtu");
// cara bari
$bulan = ["januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september", "november", "desember"];


// menampilkan array
// var_dump()/ print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $bulan[2];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array

var_dump($hari);
$hari[] = "minggu";
echo "<br>";
$hari[] = "ek boh";
unset($hari[7]); // menghapus isi array seagian
print_r($hari);
var_dump($hari);
