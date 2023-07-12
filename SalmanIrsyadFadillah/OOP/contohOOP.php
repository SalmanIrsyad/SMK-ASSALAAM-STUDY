<?php
 
//Membuat Class/kerangka dasar
class Kucing{
    //Property/Atribut
    var $jenis = "Anggora";
    var $warna = "Kuning";

    //Method/Function
    public function makan(){ 
        echo "Kucing suka makan Wiskhas";
    }
    function minum(){
        echo "Kucing suka minum air";
    }

}
//objek 
$cetak = new Kucing();//->instansiasi

//memanggil method/function
echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

//memanggil variabel/method
echo $cetak->jenis="Anggora";
echo "<br>";
echo $cetak->warna="Kuning";
?>