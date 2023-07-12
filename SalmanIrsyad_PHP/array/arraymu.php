<?php
$mobil = array(
    array(
        "merk" => "Avanza",
        "tahun" => "2019",
        "warna" => "Hitam",
    ),
    array(
        "merk" => "Xenia",
        "tahun" => "2005",
        "warna" => "Putih",
    ),
);

foreach($mobil as $value){
    echo $value['merk']."".$value['tahun']."".$value['warna']."<br>";
}

echo "<br><br>";

$mobil = array(   
    "Toyota" => array(
		"merk" 	=> "Avanza", 
        "tahun" => '2019', 
        "warna" => 'Hitam' 
    ),   
    "Daihatsu" => array(
		"merk" 	=> "Xenia",
        "tahun" => '2005', 
        "warna" => 'Putih'
    )
); 
$size = count($mobil);
$keys = array_keys($mobil);
for($i = 0; $i < $size; $i++)
{
    echo $keys[$i]. "<br>";
    foreach($mobil[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}
?>