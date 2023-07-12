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
    <form action="borma2.php" method="POST">
        <label>Jumlah Jam Kerja = </label>
        <input type="text" name="jam">
        <br>
        <label>Golongan Kerja = </label>
        <input type="radio" name="gol" value="A">A
        <input type="radio" name="gol" value="B">B
        <input type="radio" name="gol" value="C">C
        <input type="radio" name="gol" value="D">D
        <br><br>
        <input type="submit" name="kirim" value="kirim">
    </form>
</body>
</html>