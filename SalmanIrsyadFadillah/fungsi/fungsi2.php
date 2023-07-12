<?php
function penjumlahan(){
    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 + $angka2;

    echo "<h3>Penjumlahan</h3>";
    echo "Angka Pertama : ".$angka1."<br>";
    echo "Angka Kedua   : ".$angka2."<br>";
    echo "Hasil         : ".$jumlah;
}
function pengurangan(){
    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 - $angka2;

    echo "<h3>Pengurangan</h3>";
    echo "Angka Pertama : ".$angka1."<br>";
    echo "Angka Kedua   : ".$angka2."<br>";
    echo "Hasil         : ".$jumlah;
}
function perkalian(){
    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 * $angka2;

    echo "<h3>Pembagian</h3>";
    echo "Angka Pertama : ".$angka1."<br>";
    echo "Angka Kedua   : ".$angka2."<br>";
    echo "Hasil         : ".$jumlah;
}
function pembagian(){
    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 + $angka2;

    echo "<h3>Perkalian</h3>";
    echo "Angka Pertama : ".$angka1."<br>";
    echo "Angka Kedua   : ".$angka2."<br>";
    echo "Hasil         : ".$jumlah;
}
penjumlahan();
echo "<hr>";
pengurangan();
echo "<hr>";
perkalian();
echo "<hr>";
pembagian();

?>