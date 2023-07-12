<?php
if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $bi = $_POST['bi'];
    $bin = $_POST['bin'];
    $mtk = $_POST['mtk'];
    $pr = $_POST['pr'];
    $total = 0;
    $rata =0;

  }
  ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hasil Data Siswa</title>
    </head>
    <body>
      <center>
        <br><br>
        <h1>Data Siswa Kelas XI RPL</h1>
        <table border="1" width="1000px">
          <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Bahasa<br>Indoesia</th>
            <th>Bahasa<br>Inggris</th>
            <th>Matematika</th>
            <th>Produktif</th>
            <th>Total<br>Nilai</th>
            <th>Rata Rata</th>
            <th>Status</th>
          </tr>

          <?php
          for($a=0; $a<count($nis); $a++){
            ?>

            <tr>
              <td><?php echo $nis[$a]; ?></td>
              <td><?php echo $nama[$a]; ?></td>
              <td><?php echo $kelas[$a]; ?></td>
              <td><?php echo $bi[$a]; ?></td>
              <td><?php echo $bin[$a]; ?></td>
              <td><?php echo $mtk[$a]; ?></td>
              <td><?php echo $pr[$a]; ?></td>
              <td><?php echo
                $total = $bi[$a] + $bin[$a] + $mtk[$a] + $pr[$a]; ?>
              </td>
              <td><?php echo $rata = $total / 4;?></td>
              <td><?php 
                if($rata >= 75 == $rata <=100){
                    echo"Selamat Anda Lulus";
                }elseif($rata < 75 == $rata >= 0){
                    echo"Maaf Anda Tidak Lulus";
                }elseif($rata > 100){
                    echo"Tidak ada";
                }elseif($rata < 0){
                    echo"Tidak ada";
                }
            }?></td>
            </tr>
      </center>
  </body>
</html>