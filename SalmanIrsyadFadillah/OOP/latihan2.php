<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Ujian</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <h3>Nilai Ujian</h3>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" value="">
                        <option value="RPL">RPL</option>
                        <option value="TBSM">TBSM</option>
                        <option value="TKRO">TKRO</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><select name="kelas" value="">
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XI RPL 3">XI RPL 3</option>
                        <option value="XI TBSM 1">XI TBSM 1</option>
                        <option value="XI TBSM 2">XI TBSM 2</option>
                        <option value="XI TBSM 3">XI TBSM 3</option>
                        <option value="XI TKRO 1">XI TKRO 1</option>
                        <option value="XI TKRO 2">XI TKRO 2</option>
                        <option value="XI TKRO 3">XI TKRO 3</option>
                    </select></td>
                </tr>
                <tr>
                    <td colspan=3>-------------------------------------------------------<br>
                    <h3>Nilai</h3></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="mtk" value=""></td>
                </tr>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="indo" value=""></td>
                </tr>
                <tr>
                    <td>Nilai B.Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="inggris" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="rpl" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if(isset($_POST['proses'])){
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $mtk = $_POST['mtk'];
    $indo = $_POST['indo'];
    $inggris = $_POST['inggris'];
    $rpl = $_POST['rpl'];

    class Nilai{
        public $rata;

        public function hasil($nama2,$jurusan2,$kelas2,$mtk2,$indo2,$inggris2,$rpl2){
            $this->rata = ($mtk2 + $indo2 + $inggris2 + $rpl2) / 4;

            echo '<br><br><br><br><br><br>
            <center>
            <table border = "1">
                <tr>
                    <td colspan=3><center><h2>Hasil</h2></center></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>'.$nama2.'</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>'.$jurusan2.'</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>'.$kelas2.'</td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td>'.$mtk2.'</td>
                </tr>
                <tr>
                    <td>Nilai B.Indo</td>
                    <td>:</td>
                    <td>'.$indo2.'</td>
                </tr>
                <tr>
                    <td>Nilai Inggris</td>
                    <td>:</td>
                    <td>'.$inggris2.'</td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td>'.$rpl2.'</td>
                </tr>
                <tr>
                    <td>Rata - Rata</td>
                    <td>:</td>
                    <td>'.$this->rata.'</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>';
                    if($this->rata >= 80){
                        echo"Selamat Anda Lulus";
                    }elseif($this->rata < 80){
                        echo"Maaf Anda Tidak Lulus";
                    }
                    echo'</td>
                </tr>
                </table>
                </center>';
            
        }
    }
    $cetak = new Nilai();
    echo $cetak -> hasil($nama,$jurusan,$kelas,$mtk,$indo,$inggris,$rpl);
    
}

?>

                