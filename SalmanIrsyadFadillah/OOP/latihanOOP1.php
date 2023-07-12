<?php
//Membuat Class
class Mangga{
    //Property/Atribut
    var $jenis;
    var $rasa;
    var $warna;

    //Method/Function
    function dataran(){ 
        echo "Habitat mangga lebih banyak di dataran";
    }
    function rawa(){
        echo "Mangga juga bisa hidup di rawa-rawa";
    }
    function musim(){
        echo "Musim mangga biasanya dimulai pada November hingga Desember";
    }

}
//objek 
$cetak = new Mangga();

echo $cetak->dataran();
echo "<br>";
echo $cetak->rawa();
echo "<br>";
echo $cetak->musim();

?>