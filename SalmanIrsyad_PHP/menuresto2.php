<?php
if(isset($_POST['simpan'])){
    $pilih = $_POST['pilih'];
    $harga = $_POST['harga'];
    $jml2 = $_POST['jml2'];
    $total=0;
    $total_bayar=0;

  }
  ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Transaksi</title>
    </head>
    <body>
      <center>
        <br><br>
        <h1>Rekap Transaksi</h1>
        <table border="1">
          <tr>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
          </tr>

          <?php
          for($a=0; $a<count($pilih); $a++){
            ?>

            <tr>
              <td><?php echo $pilih[$a]; ?></td>
              <td><?php echo $harga[$a]; ?></td>
              <td><?php echo $jml2[$a]; ?></td>
              <td><?php echo
                    $total = $harga[$a] * $jml2[$a];
                    $total_bayar+= $total;
                    $total;} ?>
              </td>
            </tr>
            <tr>
              <td colspan="3"> Total Bayar</td>
              <td><?php
                   echo $total_bayar;
                   ?></td>
            </tr>
      </center>
  </body>
</html>