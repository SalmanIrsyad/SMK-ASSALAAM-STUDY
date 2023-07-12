<?php
//membuat Fungsi
function perkenalan($nama, $salam){
    echo $salam.",<br>";
    echo "perkenalaan,nama saya ".$nama."<br>";
    echo "Senang berkenalan dengan anda <br>";
}
//memanggil fungsi yang sudah dibuat 
perkenalan("Lazuardi","Hi");

echo"<hr>";

$saya = "Aqshal";
$ucapansalam = "Selamat siang";

//memanggil lagi
perkenalan($saya, $ucapansalam);

?>