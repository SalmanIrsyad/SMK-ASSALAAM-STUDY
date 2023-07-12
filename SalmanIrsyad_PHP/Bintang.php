<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang</title>
</head>
<body>
    <h1>Bentuk Segitiga</h1>
    <form  method="POST">
    <label>Masukan Angka </label>
    <input type="text" name="angka">
    <br><br>
    <label>Pilih Bentuk Segitiga Bintang</label><br>
    <input type="radio" name="bentuk" value="1">Siku-siku <br>
    <input type="radio" name="bentuk" value="2">Sempurna<br>
    <input type="radio" name="bentuk" value="3">Siku-siku Terbalik <br>
    <input type="radio" name="bentuk" value="4">Sempurna Terbalik <br>
    <br><br>
    <input type="submit" value="submit" name="submit">
    </form>

    
    <?php
    if (isset($_POST ['submit'])){
        $angka = $_POST ['angka'];
        $bentuk = $_POST ['bentuk'];
    
        if ($bentuk==1) {
            for ($a = $angka; $a > 0; $a--) {
                for ($b = $angka; $b >= $a; $b--) {
                    echo "*";
                }
                echo "<br>";
                }
        } elseif ($bentuk==2) {
            for ($a = $angka; $a > 0; $a--) {
                for ($i = 1; $i <= $a; $i++) {
                    echo "&nbsp";
                }
                for ($a1 = $angka; $a1 >= $a; $a1--) {
                    echo "*";
                }
                echo "<br>";
                }
        } elseif ($bentuk==3) {
            for ($a = 1; $a <= $angka; $a++) {
                for ($c = $angka; $c >= $a; $c -= 1) {
                    echo "*";
                }
            echo "<br>";
            }
        } elseif ($bentuk==4) {
            for ($a = 1; $a <= $angka; $a++) {
                for ($b = 1; $b <= $a; $b++) {
                    echo "&nbsp";
                }
                for ($c = $angka; $c >= $a; $c -= 1) {
                    echo "*";
                }
                echo "<br>";
            }
        }
    }
?>

</body>
</html>