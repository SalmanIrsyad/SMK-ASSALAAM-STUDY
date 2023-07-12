<?php

class gaji{

    private $totalp;
    private $totalg;
    public $gaji;
    public $tunjangan;


    public function gaji_pokok($nama,$jabatan){
        echo "<h3>Gaji Pokok</h3>";
        echo "Nama Karyawan : ".$nama."<br>";
        echo "Jabatan : ".$jabatan."<br>";
        if($jabatan == "Direktur"){
            echo "Gaji Pokok : ".$this->gaji = 10000000;
        }elseif($jabatan == "Manager"){
            echo "Gaji Pokok : ".$this->gaji = 7500000;
        }elseif($jabatan == "Karyawan"){
            echo "Gaji Pokok : ".$this->gaji = 5000000;
        }elseif($jabatan == "OB"){
            echo "Gaji Pokok : ".$this->gaji = 2500000;
        }
    }public function tunjangan($pendidikan){
        echo "<h3>Tunjangan</h3>";
        echo "Pendidikan : ".$pendidikan."<br>";
        if($pendidikan == "S1"){
            echo "Tunjangan Pendidikan : ".$this->tunjangan = 1000000;
        }elseif($pendidikan == "SMK"){
            echo "Tunjangan Pendidikan : ".$this->tunjangan =750000;
        }elseif($pendidikan == "SMP"){
            echo "Tunjangan Pendidikan : ".$this->tunjangan =500000;
        }elseif($pendidikan == "SD"){
            echo "Tunjangan Pendidikan : ".$this->tunjangan =250000;
        }
    }public function potongan($tabungan,$pinjaman){
        $this->totalp = $tabungan + $pinjaman;

        echo "<h3>Potongan</h3>";
        echo "Tabungan : ".$tabungan."<br>";
        echo "Pinjaman : ".$pinjaman."<br>";
        echo "Total Potongan : Rp".$this->totalp;

    }public function total(){
        $this->totalg = ($this->gaji + $this->tunjangan) - $this->totalp;

        echo "<h3>Total Gaji Bersih</h3>";
        echo "Total Gaji Bersih : ".$this->totalg;
    }
}
$cetak = new gaji();

echo $cetak->gaji_pokok("Salman","Direktur");
echo "<hr>";
echo $cetak->tunjangan("S1");
echo "<hr>";
echo $cetak->potongan(200000,50000);
echo "<hr>";
echo $cetak->total();
echo "<hr>";


?>