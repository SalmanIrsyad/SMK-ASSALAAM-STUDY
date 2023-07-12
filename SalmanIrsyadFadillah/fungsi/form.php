<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <center>
        <h2>Biodata</h2>
    <table>
        <form action="" method="POST">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value=""></td>
        </tr>
        <tr><td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal" value=""></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
            <input type="radio" name="jk" value="Perempuan">Perempuan
        </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="agama" id="">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="Tidak Punya">Tidak Punya</option>

            </select></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" value=""></textarea></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="hobi" value="Membaca">Membaca
                <input type="checkbox" name="hobi" value="Menulis">Menulis
                <input type="checkbox" name="hobi" value="Memancing">Memancing
            </td>
        </tr>
        <tr>
            <td>Moto Hidup</td>
            <td>:</td>
            <td><textarea name="moto"  value="" ></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
        </form>
    </table>
    </center>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $moto = $_POST['moto'];


    function biodata($nama1,$tgl,$jk,$agama1,$alamat1,$hobi1,$moto1){
        echo "Nama : ".$nama1."<br>";
        echo "Tanggal Lahir : ".$tgl."<br>";
        echo "Jenis Kelamin : ".$jk."<br>";
        echo "Agama : ".$agama1."<br>";
        echo "Alamat : ".$alamat1."<br>";
        echo "Hobi : ".$hobi1."<br>";
        echo "Moto Hidup : ".$moto1."<br>";
    }   

    biodata($nama,$tanggal,$jk,$agama,$alamat,$hobi,$moto);
}

?>

