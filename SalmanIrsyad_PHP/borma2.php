<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borma Cibaduyut</title>
</head>
<body>
    <h1>Borma Cibaduyut</h1>
    <p>Sistem penggajihan berdasarkan <br>golongan Karyawan</p>
    <br>
    <?php
    if (isset($_POST ['kirim'])){
        $jam = $_POST ['jam'];
        $gol = $_POST ['gol'];

        if($gol == 'A'){
            $total= $jam * 4000;
            echo"Jam Kerja Anda : ".$jam."jam <br>";
            echo"Golongan Keja  : ".$gol."<br>";
            echo"Gaji Anda Adalah : ".$total;
        }elseif($gol == 'B'){
            $total= $jam * 5000;
            echo"Jam Kerja Anda : ".$jam."jam <br>";
            echo"Golongan Keja  : ".$gol."<br>";
            echo"Gaji Anda Adalah : ".$total;
        }elseif($gol == 'C'){
            $total= $jam * 6000;
            echo"Jam Kerja Anda : ".$jam."jam <br>";
            echo"Golongan Keja  : ".$gol."<br>";
            echo"Gaji Anda Adalah : ".$total;
        }elseif($gol == 'D'){
            $total= $jam * 7000;
            echo"Jam Kerja Anda : ".$jam."jam <br>";
            echo"Golongan Keja  : ".$gol."<br>";
            echo"Gaji Anda Adalah : ".$total;
        }
    }
    ?>
</body>
</html>
