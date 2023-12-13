<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
<?php
    // Deklarasi variabel
    $angka1 = 5;
    $angka2 = 10;

    // Operator penjumlahan
    $hasilPenjumlahan = $angka1 + $angka2;

    // Operator pengurangan
    $hasilPengurangan = $angka1 - $angka2;

    // Operator perkalian
    $hasilPerkalian = $angka1 * $angka2;

    // Operator pembagian
    $hasilPembagian = $angka1 / $angka2;

    // Operator modulus
    $hasilModulus = $angka1 % $angka2;

    
    $hasila = $angka1 ** $angka2;

    $hasilaa = -$angka1;

    // Menampilkan hasil operasi
    echo "<h2>Operasi Aritmatika</h2>";
    echo "<p>5 + 10 = $hasilPenjumlahan</p>";
    echo "<p>5 - 10 = $hasilPengurangan</p>";
    echo "<p>5 * 10 = $hasilPerkalian</p>";
    echo "<p>5 / 10 = $hasilPembagian</p>";
    echo "<p>5 % 10 = $hasilModulus</p>";
    echo "<p>5 ** 10 = $hasila</p>";
    echo "<p>-a = $hasilaa</p>";

    //operator penugasan
    $a = 5;
    $b = 10;
    $c = 1000;
    $d = 500;

    // Menampilkan hasil
    echo "<h2>Operasi Penugasan</h2>";
    echo "<p> int(" . ($a + $b) . ")</p> ";
    echo "<p>int(" . ($a - $b) . ") </p>";
    echo "<p>int(" . ($d - $c) . ") </p>";
    echo "<p>int(" . (-$a * $b) . ")</p> ";

    
    
    // Operator Penugasan
    $a = 90;
    $b = 80;
    $c = 3;
    $d = 6;
    $e = 5;

    // Menampilkan hasil
    echo "<h2>Operasi Penugasan dan Perbandingan</h2>";
    echo "90 > 80: " . var_export($a > $b, true) . "<br>";
    echo "3 >= 3: " . var_export(3 >= 3, true) . "<br>";
    echo "3 < 6: " . var_export($c < $d, true) . "<br>";
    echo "5 <= 3: " . var_export($e <= $c, true) . "<br>";
    echo "'a' < 'b': " . var_export('a' < 'b', true) . "<br>";
    echo "'abc' < 'b': " . var_export('abc' < 'b', true) . "<br>";    

?>

</body>
</html>