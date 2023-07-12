<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Gaji Karyawan</title>
  </head>
  <body style="background-color: whitesmoke">
      <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: limegreen;">
        <a class="navbar-brand" href="pembuka.php">
            <img src="logo.png" width="35" height="35" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="pembuka.php" style="color: white;">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="vaksin.php" style="color: white;">Vaksinasi</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="gaji.php" style="color: white;">Gaji Karyawan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="perulangan.php" style="color: white;">Perulangan</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Penggajihan -->
      <br><br><br>
      <?php
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $namap = $_POST['namap'];
        $tanggal = $_POST['tanggal'];
        $jk = $_POST['jk'];
        $jabatan = $_POST['jabatan'];
        $pendidikan = $_POST['pendidikan'];
        $lembur = $_POST['lembur'];
        $potongan = $_POST['potongan'];
    }

    if($jabatan == "Direktur"){
        $gaji=10000000;
    }else if($jabatan == "Manager"){
        $gaji=7500000;
    }else if($jabatan == "Karyawan"){
        $gaji=5000000;
    }else if($jabatan == "OB"){
        $gaji=2500000;
    }else{
        echo "TIDAK MEMILIKI GAJI";
    }

    if($pendidikan == "SD"){
        $tunjangan = 200000;
    }else if($pendidikan == "SMP"){
        $tunjangan = 500000;
    }else if($pendidikan == "SMA"){
        $tunjangan = 1000000;
    }else if($pendidikan == "S1"){
        $tunjangan = 1500000;
    }else{
        echo "TIDAK MEMILIKI TUNJANGAN";
    }

    $lembur=$lembur*20000;
    $total=($gaji+$tunjangan+$lembur)-$potongan;
?> 

<div class="container" align="center">
        <div class="card bg- mb-3" style="max-width: 45rem;" >
        <div class="card-header" style="background-color:limegreen; color: white;"><h2>Struk Gaji Karyawan</h2></div>
        <div class="card-body">
        <table align="center">
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Tanggal : <?php echo $tanggal ?></td>
        </tr>
        <tr>
            <td><h2><i>Gaji Pokok</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Nama Karyawan</td>
            <td>:</td>
            <td><?php echo $namap ?></td>
            <td></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jk ?></td>
            <td></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><?php echo $pendidikan ?></td>
            <td></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?php echo $jabatan ?></td>
            <td></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php echo "Rp.".$gaji ?><br></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><h2><i>Tunjangan</h2></i></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Tunjangan Pendidikan</td>
            <td>:</td>
            <td><?php echo "Rp.".$tunjangan ?></td>
            <td></td>
        </tr>
        <tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td><?php echo "Rp.".$lembur ?></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><h2><i>Potongan</i></h2></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Potongan</td>
            <td>:</td>
            <td><?php echo "Rp.".$potongan ?></td>
            <td></td>
        </tr>
        <tr>
            <td><h2><i>Total Gaji</i></h2></td>
            <td><i><h2>:</h2></i></td>
            <td><h2><i><?php echo "Rp.".$total ?></i></h2></td>
            <td></td>
        </tr>  
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Bendahara : <?php echo "$nama"; ?></td>
        </tr>       
        </table>    
        </div>
    </div>
</div>

    <br><br><br><br>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>

















