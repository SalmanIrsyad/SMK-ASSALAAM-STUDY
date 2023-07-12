<?php
$example=[
    [
        'nama' => 'Abdul',
        'peliharaan' => [
            ['nama' => 'Kelinci'],
            ['nama' => 'Marmot'],
        ],
    ],
    [
        'nama' => 'Priyadi',
        'peliharaan' => [
            ['nama' => 'Burung'],
            ['nama' => 'Ayam'],
            ['nama' => 'Kucing'],
        ],
    ],
];

foreach($example as $data){
    echo "Nama Pemilik : ".$data['nama']."<br>";
    echo "Daftar Hewan Peliharaan : ";
    echo "<ul>";
    foreach($data['peliharaan'] as $peliharaan){
        echo "<li>".$peliharaan['nama']."</li>";
    }
    echo "</ul>";
    echo "<br>";
}
?>