<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Persgei Panjang</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <table>
            <h3>Menghitung Luas Persegi Panjang</h3>
                <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><input type="number" name="panjang" value=""></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><input type="number" name="lebar" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="HITUNG"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['hitung'])){
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    
    class persegiPanjang{

        public $luas;

        public function luas_persegiPanjang($panjang2,$lebar2){
            $this->luas = $panjang2 * $lebar2;

            echo "Panjang : ".$panjang2."<br>";
            echo "lebar : ".$lebar2."<br>";
            echo "Luasnya : ".$this->luas."<br>";
        }
    }
    $cetak = new persegiPanjang();
    echo $cetak->luas_persegiPanjang($panjang,$lebar);

}
?>
