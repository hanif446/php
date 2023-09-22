<?php
// Pertemuan 3 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

echo "Faridah Hanifah";

print "Faridah Hanifah";

print_r("Faridah Hanifah");

var_dump("Faridah Hanifah");

echo 123;

echo true;

echo false;

echo 'Informatika';

echo "Jum'at";

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP


// Variabel dan Tipe Data
// Variabel
// Namanya tidak boleh diawali dengan angka, tapi boleh mengandung angka
// Tidak boleh ada spasi, bisa diganti dnegan unserscore
$nama = "Faridah Hanifah";

// Interpolasi : apakah di dalam string terdapat variable atau tidak.

// Operator 
// Aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x + $y;


// Operator penggabung string / concatenation / concat
// .

$nama_depan  = "Faridah";
$nama_belakang = "Hanifah";
echo $nama_depan . " " . $nama_belakang;

// Operator assignment 
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5; 
echo $x;


$nama = "Faridah";

$nama .= " ";

$nama .= "Hanifah";

echo $nama;

// Operator Perbandingan

// <, >, <=, >=, ==, !=

var_dump(1 < 5);

// Operator Identitas 
//  ===, !==

var_dump(1 === 5);

// Opeartor Logika
//  &&, ||, !

$x = 10;

var_dump($x < 20 && $x % 2 == 0);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Belajar PHP</title>
</head>
<body>
  <!-- 1 -->
  <h1>Halo, Selamat Datang <?php echo "Faridah"; ?></h1>
  <!-- 2 -->
  <p><?php echo "Ini adalah paragraf"; ?></p>

  <?php
    echo "<h1>Halo, Selamat Datang Faridah</h1>";
  ?>
</body>
</html>