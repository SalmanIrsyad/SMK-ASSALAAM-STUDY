<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Rapot</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <h2>RAPOT</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value=""></td>
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
        <!-- NILAI MATEMATIKA --> 
                <tr>
                    <td colspan=3>-------------------------------------------------------<br>
                    <h3>Nilai Matematika</h3></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nhmtk" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="ntmtk" value=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="numtk" value=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nuamtk" value=""></td>
                </tr>
                <!-- NILAI Bahasa Indonesia --> 
                <tr>
                    <td colspan=3>-------------------------------------------------------<br>
                    <h3>Nilai Bahasa Indonesia</h3></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nhb" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="ntb" value=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nub" value=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nuab" value=""></td>
                </tr>
                <!-- NILAI Bahasa Iggris -->
                <tr>
                    <td colspan=3>-------------------------------------------------------<br>
                    <h3>Nilai Bahasa Inggris</h3></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nhbi" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="ntbi" value=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nubi" value=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nuabi" value=""></td>
                </tr>
                <!-- NILAI Bahasa Rekayasa Perangkat Lunak -->
                <tr>
                    <td colspan=3>-------------------------------------------------------<br>
                    <h3>Nilai Rekayasa Perangkat Lunak</h3></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nhrpl" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="ntrpl" value=""></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nurpl" value=""></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nuarpl" value=""></td>
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
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    //Nilai Matematika
    $nhmtk = $_POST['nhmtk'];
    $ntmtk = $_POST['ntmtk'];
    $numtk = $_POST['numtk'];
    $nuamtk = $_POST['nuamtk'];
    
    //Nilai Bahasa Indonesia
    $nhb = $_POST['nhb'];
    $ntb = $_POST['ntb'];
    $nub = $_POST['nub'];
    $nuab = $_POST['nuab'];

    //Nilai Bahasa Iggris
    $nhbi = $_POST['nhbi'];
    $ntbi = $_POST['ntbi'];
    $nubi = $_POST['nubi'];
    $nuabi = $_POST['nuabi'];

    //Nilai Rekayasa Perangkat Lunak
    $nhrpl = $_POST['nhrpl'];
    $ntrpl = $_POST['ntrpl'];
    $nurpl = $_POST['nurpl'];
    $nuarpl = $_POST['nuarpl'];


    class nilai{
        function mtk($nama1,$kelas1,$jurusan1,$nhmtk1,$ntmtk1,$numtk1,$nuamtk1){
            $totalm = ($nhmtk1 + $ntmtk1 + $numtk1 + $nuamtk1) / 4;

            echo "<h2>Nilai Rapot</h2>";
            echo "Nama    : ".$nama1."<br>";
            echo "Kelas   : ".$kelas1."<br>";
            echo "Jurusan : ".$jurusan1."<br>";
            echo "-------------------------------------------------"."<br>";
            echo "<h3>Nilai Matematika</h3>";
            echo "Nilai harian : ".$nhmtk1."<br>";
            echo "Nilai Tugas  : ".$ntmtk1."<br>";
            echo "Nilai UTS    : ".$numtk1."<br>";
            echo "Nilai UAS    : ".$nuamtk1."<br>";
            echo "Rapot        : ".$totalm."<br>";
            
        }
        function bindo($nhb1,$ntb1,$nub1,$nuab1){
            $totalb = ($nhb1 + $ntb1 + $nub1 + $nuab1) / 4;

            echo "<h3>Nilai Bahasa Indonesia</h3>";
            echo "Nilai harian : ".$nhb1."<br>";
            echo "Nilai Tugas  : ".$ntb1."<br>";
            echo "Nilai UTS    : ".$nub1."<br>";
            echo "Nilai UAS    : ".$nuab1."<br>";
            echo "Rapot        : ".$totalb."<br>";
            
        }
        function binggris($nhbi1,$ntbi1,$nubi1,$nuabi1){
            $totalbi = ($nhbi1 + $ntbi1 + $nubi1 + $nuabi1) / 4;

            echo "<h3>Nilai Bahasa inggris</h3>";
            echo "Nilai harian : ".$nhbi1."<br>";
            echo "Nilai Tugas  : ".$ntbi1."<br>";
            echo "Nilai UTS    : ".$nubi1."<br>";
            echo "Nilai UAS    : ".$nuabi1."<br>";
            echo "Rapot        : ".$totalbi."<br>";
            
        }
        function rpl($nhrpl1,$ntrpl1,$nurpl1,$nuarpl1){
            $totalrpl = ($nhrpl1 + $ntrpl1 + $nurpl1 + $nuarpl1) / 4;

            echo "<h3>Nilai Rekayasa Perangkat Lunak</h3>";
            echo "Nilai harian : ".$nhrpl1."<br>";
            echo "Nilai Tugas  : ".$ntrpl1."<br>";
            echo "Nilai UTS    : ".$nurpl1."<br>";
            echo "Nilai UAS    : ".$nuarpl1."<br>";
            echo "Rapot        : ".$totalrpl."<br>";
            
        }
    }
    $cetak = new nilai();
    echo "<center>";
    echo $cetak -> mtk($nama,$kelas,$jurusan,$nhmtk,$ntmtk,$numtk,$nuamtk);
    echo $cetak -> bindo($nhb,$ntb,$nub,$nuab);
    echo $cetak -> binggris($nhbi,$ntbi,$nubi,$nuabi);
    echo $cetak -> rpl($nhrpl,$ntrpl,$nurpl,$nuarpl);
    echo "</center>";
}

?>