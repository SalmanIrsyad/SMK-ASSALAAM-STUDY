<?php
 
class Manusia{

    public $nama ="Salman";
    public $ras;

    function tampilkan(){
        echo "INI MENGGUNAKAN PROPERTY PUBLIC<br>";
        echo "Hallo Nama Saya Salman";
    }
}
$cetak = new Manusia();

echo $cetak -> nama;
echo "<br>";
echo $cetak -> tampilkan();
 
?>