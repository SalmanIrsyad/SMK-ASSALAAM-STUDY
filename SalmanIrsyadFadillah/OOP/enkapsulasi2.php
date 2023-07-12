<?php
 
class Manusia{

    //Property yang tidak bisa diakses oleh class lain selain class itu sendiri
    private $nama ="Salman (private)";
    private $ras;

    function tampilkan(){
        echo "INI MENGGUNAKAN PROPERTY PRIVATE<br>";
        echo "Hallo Nama Saya ".$this->nama;
    }
}
//Instansiasi
$cetak = new Manusia();

echo $cetak -> tampilkan();
 
?>