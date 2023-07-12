<?php

class bangunDatar{

    protected $luas;
    protected $keliling;
} 

class Segitiga extends bangunDatar{

    public function luasSegitiga($alas,$tinggi){

        echo "<h3>Menghitung luas Segitiga</h3>";
        echo "Alas : ".$alas."<br>";
        echo "Tinggi : ".$tinggi."<br>";

        $this->luas = ($alas * $tinggi)/2;

        echo "Luas Segitiga : ".$this->luas;
    }
    public function kelilingSegitiga($sisi1,$sisi2,$sisi3){

        echo "<h3>Menghitung Keliling Segitiga</h3>";
        echo "Sisi1 : ".$sisi1."<br>";
        echo "Sisi2 : ".$sisi2."<br>";
        echo "Sisi3 : ".$sisi3."<br>";

        $this->keliling = $sisi1 + $sisi2 + $sisi3;

        echo "Keliling Segitiga : ".$this->keliling."<br>";
    }
}
$cetak = new Segitiga();

echo $cetak->luasSegitiga(10,5);
echo $cetak->kelilingSegitiga(5,6,7);
echo "<hr>";

?>