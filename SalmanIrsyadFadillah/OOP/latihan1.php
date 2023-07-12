<?php

class bangunDatar{

    public $totalp;

    function persegiPanjang($p,$l){
        $this->totalp= $p *$l;

        echo "<h3>Luas Persegi Panjang</h3>";
        echo "Luas Persegi Panjang : Panjang x Lebar"."<br>";
        echo "Panjang : ".$p."<br>";
        echo "Lebar : ".$l."<br>";
        echo "Total : ".$this->totalp;

    }function persegi($s){
        $totals= $s * $s;

        echo "<h3>Luas Persegi</h3>";
        echo "Luas Persegi : Sisi x Sisi"."<br>";
        echo "Sisi : ".$s."<br>";
        echo "Total : ".$totals;

    }function Lingkaran($r){
        $totall= 22/7 * $r * $r;

        echo "<h3>Luas Lingkaran</h3>";
        echo "Luas Lingkaran : π x r²"."<br>";
        echo "π : 22/7"."<br>";
        echo "r : ".$r."<br>";
        echo "Total : ".$totall;

    }function Segitiga($a,$t){
        $totalse= 1/2 * $a * $t;

        echo "<h3>Luas Segitiga</h3>";
        echo "Luas Segitiga : 1/2 x a x t"."<br>";
        echo "Alas : ".$a."<br>";
        echo "Tinggi : ".$t."<br>";
        echo "Total : ".$totalse;

    }function jajar($al,$tj){
        $totalja=  $al * $tj;

        echo "<h3>Luas Jajar Genjang</h3>";
        echo "Luas Jajar Genjang : a x t"."<br>";
        echo "Alas : ".$al."<br>";
        echo "Tinggi : ".$tj."<br>";
        echo "Total : ".$totalja;

    }

}
$cetak = new bangunDatar();

echo $cetak -> persegiPanjang(10,5);
echo "<hr>";
echo $cetak -> persegi(5);
echo "<hr>";
echo $cetak -> Lingkaran(7);
echo "<hr>";
echo $cetak -> Segitiga(10,4);
echo "<hr>";
echo $cetak -> jajar(8,5);
echo "<hr>";

?>