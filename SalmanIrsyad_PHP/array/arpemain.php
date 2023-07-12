<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align="center">
<?php
$pemain = array(   
    "<h2>Mohammed Rashid</h2>" => array(
		"Profesi" => "Pemain Sepak Bola", 
        "Tim" => 'Persib Bandung', 
        "Posisi" => 'Gelandang' 
    ),
    "<h2>Febri Hariyadi</h2>" => array(
		"Profesi" => "Pemain Sepak Bola", 
        "Tim" => 'Persib Bandung', 
        "Posisi" => 'Gelandang' 
    ),
    "<h2>Victor Igbonefo</h2>" => array(
		"Profesi" => "Pemain Sepak Bola", 
        "Tim" => 'Persib Bandung', 
        "Posisi" => 'Bek' 
    ),
    "<h2>Supardi Nasir</h2>" => array(
		"Profesi" => "Pemain Sepak Bola", 
        "Tim" => 'Persib Bandung', 
        "Posisi" => 'Bek' 
    ),
    "<h2>David da Silva</h2>" => array(
		"Profesi" => "Pemain Sepak Bola", 
        "Tim" => 'Persib Bandung', 
        "Posisi" => 'Penyerang' 
    ),
    "<h2>Cristiano Ronaldo</h2>" => array(
		"Profesi" => "Pemain Sepak Bola", 
        "Tim" => 'Manchester United', 
        "Posisi" => 'Penyerang' 
    ),
    "<h2>Lionel Messi</h2>" => array(
		"Profesi" => "Pemain Sepak Bola", 
        "Tim" => 'Paris Saint-Germain F.C.', 
        "Posisi" => 'Penyerang' 
    ),
    "<h2>Neymar</h2>" => array(
		"Profesi" => "Pemain Sepak Bola", 
        "Tim" => 'Paris Saint-Germain F.C.', 
        "Posisi" => 'Penyerang / Pemain sayap' 
    ),
    "<h2>Erling Haaland</h2>" => array(
		"Profesi" => "Pemain Sepak Bola", 
        "Tim" => 'Borussia Dortmund', 
        "Posisi" => 'Penyerang' 
    ),
    "<h2>David de Gea</h2>" => array(
		"Profesi" => "Pemain Sepak Bola", 
        "Tim" => 'Manchester United', 
        "Posisi" => 'Kiper' 
    ),   
); 
$size = count($pemain);
$keys = array_keys($pemain);
for($i = 0; $i < $size; $i++)
{
    echo $keys[$i];
    foreach($pemain[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br> ";
    }
    echo "<br><hr><br>";
}
?>
</div>
</body>
</html>