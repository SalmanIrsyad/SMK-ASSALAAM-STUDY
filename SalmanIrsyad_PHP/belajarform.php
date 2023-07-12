<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form</title>
</head>
<body>
    <h1>Belajar Form</h1>
    <form method="POST">
        <label>Nilai</label>
        <input type="text" name="nilai">
        <br>
        <?php
        if(isset($_POST ['Proses'])){
            $nilai= $_POST ['nilai'];

            if($nilai >= 75 == $nilai <=100){
                echo"Nilai Anda&nbsp".$nilai."&nbspSelamat Anda Lulus";
            }elseif($nilai < 75 == $nilai >= 0){
                echo"Nilai Anda&nbsp".$nilai."&nbspMaaf Anda Tidak Lulus";
            }elseif($nilai > 100){
                echo"Nilai Anda&nbsp".$nilai."&nbspTidak ada";
            }elseif($nilai < 0){
                echo"Nilai Anda&nbsp".$nilai."&nbspTidak ada";
            }
        }
        ?>
        <br><br>
        <input type="submit" value="Proses" name="Proses">
    </form>
</body>
</html>

