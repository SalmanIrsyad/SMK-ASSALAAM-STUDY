<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Vaksin</title>
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

      <!-- Vaksin -->
      <br><br><br>
            <form method="POST" action="vaksin2.php">
            <div class="container" align="center">
            <div class="card text-center" style="width: 28rem;">
                <img src="vaksin.jpg" class="card-img-top" alt="logo" width="100%">
                <div class="card-body">
            <h2>Syarat Masuk Ke Miko Mall</h2>
            <!-- form -->
            <form method="POST" action="vaksin2.php">
            <div class="form-group" align="left">
                <label for="exampleInputName">Nama Anda</label>
                  <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" name="nama">
                <div class="form-group">
                  <label>Status Vaksin</label>
                <select class="custom-select" name="vaksin">
                  <option default>---Status Vaksin---</option>
                  <option value="Sudah Vaksin">Sudah Vaksin</option>
                  <option value="Belum Vaksin">Belum Vaksin</option>
                </select>
                </div>
              <button type="submit" class="btn btn-primary" name="simpan">Kirim</button>
              </div>
            </form>
          </div>
          </div>
          </div>
            </form>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br>







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
