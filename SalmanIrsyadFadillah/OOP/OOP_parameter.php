<?php

class Manusia{
    function biodata($nama,$jk,$tgl,$agama,$alamat){
        echo "Nama : ".$nama."<br>";
        echo "Jenis Kelamin : ".$jk."<br>";
        echo "Tanggal Lahir : ".$tgl."<br>";
        echo "Agama : ".$agama."<br>";
        echo "Alamat : ".$alamat."<br>";
    }
}
$cetak =new Manusia();
echo $cetak->biodata("Udin","Laki-laki","7 April 2022","Islam","Jl.cibaduyut"); 
?>