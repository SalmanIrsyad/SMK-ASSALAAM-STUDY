<?php

class Manusia{
    function biodata($nama,$umur,$jk,$alamat,$agama,$hobi){
        echo "Nama : ".$nama."<br>";
        echo "Umur : ".$umur."<br>";
        echo "Jenis Kelamin : ".$jk."<br>";
        echo "Alamat : ".$alamat."<br>";
        echo "Agama : ".$agama."<br>";
        echo "Hobi : ".$hobi."<br>";
    }
}
$cetak =new Manusia();
echo $cetak->biodata("Udin",17,"Laki-laki","Jl.cibaduyut","Islam","Malings"); 
?>