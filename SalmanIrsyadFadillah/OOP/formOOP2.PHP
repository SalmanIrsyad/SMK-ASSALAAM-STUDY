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
        <table>
            <form action="" method="POST">
                <h3>Menghitung Luas Persegi Panjang</h3>
                <tr>
                    <td>Masukan Panjang</td>
                    <td>:</td>
                    <td><input type="number" name="panjang" value=""></td>
                </tr>
                <tr>
                    <td>Masukan Lebar</td>
                    <td>:</td>
                    <td><input type="number" name="lebar" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="HITUNG"></td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>

<?php
if(isset($_POST['hitung'])){
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    
    class persegiPanjang{
        function luas($panjang1,$lebar1){
            $total = $panjang1 * $lebar1;
            echo "Luas Persegi panjang : P x L"."<br>";
            echo "Panjang : ".$panjang1."<br>";
            echo "lebar : ".$lebar1."<br>";
            echo "Hasil : ".$total."<br>";
        }
    }
    $cetak = new persegiPanjang();
    echo $cetak->luas($panjang,$lebar);

}
?>