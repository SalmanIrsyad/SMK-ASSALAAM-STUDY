<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Restoran</title>
</head>
<body>
<center>
  <br><br>
<h1>Menu Makanan & Minuman di <br>Restoran</h1>
<br><br>
      <form method ="POST" action = "">
            <table>
              <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
              </tr>
              <tr>
                <td>Jumlah Pemesanan</td>
                <td>:</td>
                <td><input type="number" name="jml" ></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><br><input type="submit" name="proses" value="Proses"></td>
              </tr>
        </table>
      </form>
    <?php
      if (isset($_POST ['proses'])){
        $nama = $_POST ['nama'];
        $jml = $_POST ['jml'];


            for($i = 1; $i <= $jml; $i++){
              echo '<form action="menuresto2.php" method="POST">
              <table>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Pesanan Ke - '.$i.'</td>
                </tr>
                <tr>
                  <td>Pilih Paket</td>
                  <td>:</td>
                  <td><input type=text name=pilih[] value=></td>
                </tr>
                <tr>
                  <td>Harga</td>
                  <td>:</td>
                  <td><input type=number name=harga[] value=></td>
                </tr>
                <tr>
                  <td>Jumlah</td>
                  <td>:</td>
                  <td><input type=number name=jml2[] value=></td>
                </tr>';
        }
          echo '<tr>
            <td></td>
            <td></td>
            <td><input type=submit name=simpan value="Simpan"</td>
            </tr>
          </table>
        </form>';
    }
?>
<br><br><br><br>
 
</center>
</body>
</html>