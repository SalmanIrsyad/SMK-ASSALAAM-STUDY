<?php
$bio=[
    [
        'nama' => "Ujang Betok",
        'kelas' => "RPL 1",
        'alamat' => "Bandung",
        'jenis' => "Laki-laki",
        'tgl' => "1 januari 2000"
    ],
    [
        'nama' => "Marco Mambo",
        'kelas' => "RPL 2",
        'alamat' => "Bojong Koneng",
        'jenis' => "Laki-laki",
        'tgl' => "2 januari 2001"
    ],
    [
        'nama' => "Junaedi",
        'kelas' => "RPL 3",
        'alamat' => "Bojong Citepus",
        'jenis' => "Laki-laki",
        'tgl' => "3 januari 2002"
    ],
    [
        'nama' => "Ucup",
        'kelas' => "RPL 1",
        'alamat' => "Palasari",
        'jenis' => "Laki-laki",
        'tgl' => "4 januari 2003"
    ],
    [
        'nama' => "Asep Axis",
        'kelas' => "RPL 3",
        'alamat' => "Ciwidey",
        'jenis' => "Laki-laki",
        'tgl' => "5 januari 2004"
    ],
    [
        'nama' => "Neti",
        'kelas' => "RPL 1",
        'alamat' => "Dago",
        'jenis' => "Perempuan",
        'tgl' => "5 januari 2000"
    ],
];

echo "<h1>Biodata</h1>";
foreach($bio as $key){
    echo "Nama                : ".$key['nama']."<br>";
    echo "Kelas               : ".$key['kelas']."<br>";
    echo "Alamat              : ".$key['alamat']."<br>";
    echo "Jenis Kelamin       : ".$key['jenis']."<br>";
    echo "Tanggal,Tahun Lahir : ".$key['tgl']."<br>";
    echo "<hr>";
}

?>