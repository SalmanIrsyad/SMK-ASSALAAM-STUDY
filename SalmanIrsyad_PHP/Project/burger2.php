

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Burger</title>
    <link rel="icon" type="image/png" href="logo.png">
  </head>
  <body style="background-color: rgba(112, 129, 96, 1)">
  <form>
      <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgba(216, 197, 147, 1);">
        <a class="navbar-brand" >
            <img src="logo.png" width="80" height="80" alt="logo" href="login.php">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php" style="color:rgb(187, 59, 14)">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="berlangganan.php" style="color:rgb(187, 59, 14)">Berlangganan</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="kategori.php" style="color:rgb(187, 59, 14)">Kategori</a>
            </li>
          </ul>
          <a class="nav-link" href="login.php" style="color:rgb(187, 59, 14)">Login</a>
    </form>
        </div>
      </nav>

      <!-- Home -->
      <br><br><br><br>
      <div class="container">
      <div class="card" style="width: 30rem;border-radius= 10px;background-color:whitesmoke">
            <div class="card-body" align="center">
            <?php
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $paket = $_POST['paket'];
        $jml = $_POST['jml'];
        $ber = $_POST['ber'];
        $total=0;
    }
    
?> 
    <center>
        <div class="card bg- mb-3" style="max-width: 45rem;background-color:whitesmoke;" >
        <div class="card-header" ><h2>Transaksi</h2></div>
        <div class="card-body">
        <table align="center">
        <tr>
            <td>Nama Pemesan</td>
            <td>:</td>
            <td><?php $nama ?></td>
        </tr>
        <tr>
            <td>Nama Paket</td>
            <td>:</td>
            <td><?php $paket ?></td>
        </tr>
        <tr>
            <td>Jumlah Pesanan</td>
            <td>:</td>
            <td><?php  $jml ?></td>
        </tr>
        <tr>
            <td>Berlangganan</td>
            <td>:</td>
            <td><?php $ber ?></td>
        </tr>
        </div>
    </center>
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





