<?php

function dataDiri($nama,$jenis){
    echo "Nama : ".$nama."<br>";
    echo "Jenis Kelamin : ".$jenis."<br>";
}

function kelas($jurusan,$kelas){
    echo dataDiri("Salman","Pria");
    echo "Jurusan : ".$jurusan."<br>";
    echo "Kelas : ".$kelas."<br>";
}

kelas("Rekayasa Perangkat Lunak","XI RPL 1");
?>