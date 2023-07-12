<?php
 
class Manusia{

    protected $nama ="Salman (protected)";
    protected $ras;

    function tampilkan(){
        echo "INI MENGGUNAKAN PROPERTY PROTECTED<br>";
        echo "Hallo Nama Saya ".$this->nama;
    }
}
$cetak = new Manusia();

echo $cetak -> tampilkan();
 
?>