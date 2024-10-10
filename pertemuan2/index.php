<?php
// perttemunan 2 - PHP dasar
// Sintaks PHP

// Standar output
// echo, print
// print_r
// var_dump

// echo '"Mohammad Radenis"'; // kalo mau tarok kutip, bagian pembuka/penutup harus beda dengan yg tengah


// penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tpai boleh mengandung angka
// $nama = "mahelbee";

// echo "Hallo, nama saya $nama";

// Operator
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabungan string / concatenation / concat
// .
// $nama_depan = "Mohammad";
// $nama_belakang = "Radenis";
// echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5; //terjumlahkan
// echo $x;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 < 5); // hanya mengecek nilai, tidak tipe data

// Identitas
// ===, !==
// var_dump(1 === "5");

// Logika
// %%, ||, !
$x = " 30";
var_dump($x < 20 || $x % 2 == 0);
