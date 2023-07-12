<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
        <tr>
            <td>Masukan Angka</td>
            <td>:</td>
            <td>
            <td><input type="number" name="angka"></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
        </tr>
            <tr>
                <td>Pilih Bentuk</td>
                <td></td>
                <tr>
                <td><input type="radio" name="pilih" value="1">Siku-Siku</td>
                </tr>
                <tr>
                <td><input type="radio" name="pilih" value="2">Sempurna</td>
                </tr>
                <tr>
                <td><input type="radio" name="pilih" value="3">Siku Terbalik</td>
                </tr>
            </tr>
            <tr>
                <td><input type="radio" name="pilih" value="4">Sempurna Terbalik</td>
            </tr>
            <td><input type="submit" value="submit" name="kirim"></td>
        </table>
        </form>
<br>
<br>
    <?php
if (isset($_POST['kirim'])) {
    $pilih = $_POST['pilih'];
    $angka = $_POST['angka'];

    if ($pilih == 1) {
        for ($a = $angka; $a > 0; $a--) {
    for ($b = $angka; $b >= $a; $b--) {
        echo "*";
    }
    echo "<br>";
}

    } elseif ($pilih == 2) {
        for ($a = $angka; $a > 0; $a--) {
    for ($i = 1; $i <= $a; $i++) {
        echo "&nbsp";
    }
    for ($a1 = $angka; $a1 >= $a; $a1--) {
        echo "*";
    }
    echo "<br>";
}
    } elseif ($pilih == 3) {
        for ($a = 1; $a <= $angka; $a++) {
    for ($c = $angka; $c >= $a; $c -= 1) {
        echo "*";
    }
    echo "<br>";
}
    } elseif ($pilih == 4) {

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
