<!-- function() -->
<?php
$nama = "Chaerul";
$kota = "Jakarta";
echo ucfirst($kota);
echo strtoupper($nama);

// casting
echo "<br><br";
echo "<h1>casting di php</h1>";

$a = 1;
$b = "nama";
$c = 0.10;
$d = true;

$a = (string) $a;
$b = (int) $b;
$c = (string) $c;
$d = (string) $d;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

?>