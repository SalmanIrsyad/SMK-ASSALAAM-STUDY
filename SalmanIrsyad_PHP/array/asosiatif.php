<?php

$siswa = [
    [
        'nama' => "Bayu",
        'kelas' => "11 RPL 1"
    ],
    [
        'nama' => "Adila",
        'kelas' => "11 RPL 2"
    ],
    [
        'nama' => "Adrian",
        'kelas' => "11 RPL 3"
    ],
];

echo "<h1>Array Menggunakan Foreach</h1>";
foreach($siswa as $data2){
    echo "Nama Siswa : ".$data2['nama']."<br>";
    echo "Kelas : ".$data2['kelas']."<br>";
    echo "<hr>";
}
echo"<br><br>";

//Membuat Array Assosiative
$nama_buah = array("Pepaya"=> "Pepaya","Nangka" => "Nangka",
    "Semangka" => "Semangka","Durian" => "Durian","Pisang"=>"Pisang"
);

//Looping array menggunakan foreach
echo "<h2>Looping menggunakan foreach</h2>";
foreach($nama_buah as $val => $val_value){
    echo "<b>elemen : ".$val."</b> <i> Value : ".$val_value."</i><br>";
}

echo"<br><br>";
//Looping array menggunakan FOR
$nama_orang["rani"]="rani";
$nama_orang["devi"]="devi";
$nama_orang["yuli"]="yuli";
$nama_orang["andin"]="andin";
$nama_orang["desi"]="desi";

echo"<h2>Looping menggunakan FOR</h2>";
$keys = array_keys($nama_orang);
$round = count($nama_orang);

for($i=0;$i < $round;++$i){
    echo "<b>elemen : ".$keys[$i]."</b> <i> Value : ".$nama_orang[$keys[$i]]."</i><br>";
}
echo "<br><br>";
echo"<b>Penggunaan Top dan Bottom didalam array Assosiatif</b>";
echo "<br>";

$counturis = array(
    'CAD' => 'Canada',
    'TWN' => 'Taiwan',
    'USA' => 'United States',
    'GBR' => 'United Kindom',
    'GER' => 'Germany'
);

print "Original/n";
print_r($counturis);

print "Move Taiwan to the top/n";
move_to_top($counturis,'TWN');
print_r($counturis);

print "Move United States to the top/n";
move_to_top($counturis,'USA');
print_r($counturis);

function move_to_top(&$array,$key){
    $temp = array($key => $array[$key]);
    unset($array[$key]);
    $array = $temp + $array;
}

function move_to_bottom(&$array,$key){
    $value= $array[$key];
    unset($array[$key]);
    $array[$key] = $value;
}

?>