<?php
if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $pro = $_POST['pro'];
    $pas = $_POST['pas'];
    $pts = $_POST['pts'];
    $hadir = $_POST['hadir'];
    $nlrapot = 0;
    $rata =0;

  }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Data Siswa</title>
    <link rel="icon" type="image/png" href="logo.png">
  </head>
  <body style="background-color:whitesmoke">
      <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:MediumTurquoise">
        <a class="navbar-brand" >
            <img src="logo.png" width="60" height="60" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php" style="color:white"><b>Home</b></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="penilaian.php" style="color:white"><b>Penilaian</b></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="dtnilai.php" style="color:white"><b>Data Nilai</b></a>
            </li>
          </ul>
    </form>
        </div>
      </nav>
      <div class="container">
      <center>
        <br><br><br>
    <h1>Data Nilai Pelajaran Produktif</h1>
    <br>
    <table class="table">
  <thead class="thead" bgcolor="MediumTurquoise">
    <tr>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Nilai Bulanan (35%)</th>
      <th scope="col">Nilai PAS (15%)</th>
      <th scope="col">Nilai PTS (20%)</th>
      <th scope="col">Nilai Kehadiran (30%)</th>
      <th scope="col">Nilai Rapot</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
  <?php
          for($a=0; $a<count($nis); $a++){
            ?>
            <tr>
              <td><?php echo $nis[$a]; ?></td>
              <td><?php echo $nama[$a]; ?></td>
              <td><?php echo $kelas[$a]; ?></td>
              <td><?php echo $pro[$a]; ?></td>
              <td><?php echo $pas[$a]; ?></td>
              <td><?php echo $pts[$a]; ?></td>
              <td><?php echo $hadir[$a]; ?></td>
              <td><?php echo
                $nlrapot = ($pro[$a] * 35/100) + ($pas[$a] * 15/100) + ($pts[$a] * 20/100) + ($hadir[$a] * 30/100); ?>
              </td>
              <td><?php 
                if($nlrapot >=90 == $nlrapot <=100){
                    echo"A";
                }elseif($nlrapot >=  80 == $nlrapot <= 89){
                    echo"B";
                }elseif($nlrapot >=  70 == $nlrapot <= 79){
                  echo"C";
                }elseif($nlrapot >=  60 == $nlrapot <= 69){
                  echo"D";
                }elseif($nlrapot >=  0 == $nlrapot <= 59){
                  echo"E";
                }elseif($nlrapot >=  100){
                  echo"Grade Tidak Valid";
                }elseif($nlrapot < 0){
                    echo"Grade Tidak Valid";
                }
            }?></td>
            </tr>
  </tbody>
</table>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </center>
    <div class="jumbotron text-center" style="margin-bottom:0;background-color:DarkSlateGrey">
    <div class ="container">
    <img src="logo.png" style="width: 200px" align="left"><br>
    <p style="color:white"><b>Powered By :</b></p>
    <p style="color:white">Salman Irsyad Fadillah</p>
    </div>
</div>

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