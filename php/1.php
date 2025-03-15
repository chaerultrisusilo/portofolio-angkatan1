<?php
// $ dollar : membuat variable
$nama = "PPKD Jakarta Pusat"; //varchar : kumpulan angka dan karakter lainnya;
$angkatan = 2025; //int : kumplan angka 
$tinggi = 168.3; //float :
$status = 1;
$status = 0;

$nama_depan = "Chaerul";
$nama_belakang = "Trisusilo";

// array
$keranjang = ['salak', 'mangga', 'pepaya'];
echo "<p>$nama</p>";
print "$nama" . "<br>";
print_r($keranjang);
var_dump($true);
var_dump($false);

echo $nama_depan . " " . $nama_belakang;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>Constan Variable di php</h1>";

define("mobil", "Mini Cooper");
const motor = "Supra Batok";
echo motor;
