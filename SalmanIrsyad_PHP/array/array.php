<?php

//membuat array kosong
$buah = array();
$hobi = [];

//membuat array sekaligus mengisisnya
$minuman = array(
    'Kopi' => "Pait",
    'Teh' => "Manis",
    'Jus Jeruk' => "Asem");
$makanan = ["Nasi Goreng","Soto","Bubur"];

echo $minuman['Kopi']."<br>";
echo $makanan[1];
echo "<br>";

//Array 2(Dua) Dimensi

$matriks = [
    [2,3,4],
    [7,5,0],
    [4,3,8]
];

//Cara mengakses isisnya
echo $matriks[1][0];
?>

//Range int = 1-100
//Alokasi Memory = 11 digit