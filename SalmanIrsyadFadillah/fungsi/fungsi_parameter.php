<?php
function Biodata($nama,$jenis_kelamin,$tgl,$agama,$alamat,$hobi="Basket"){
    echo "Nama : ".$nama."<br>";
    echo "Jenis Kelamin : ".$jenis_kelamin."<br>";
    echo "Tanggal Lahir : ".$tgl."<br>";
    echo "Agama : ".$agama."<br>";
    echo "Alamat : ".$alamat."<br>";
    echo "Hobi : ".$hobi."<br>";
}
Biodata("Udin","Pria","32 januari 2050","Islam","jl.cibaduyut");

?>