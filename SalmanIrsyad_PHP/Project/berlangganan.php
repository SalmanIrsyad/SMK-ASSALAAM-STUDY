<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Berlangganan</title>
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
      <br><br>
      <div class="container" >
      <font face="Roboto" size="72" style="color:rgba(216, 197, 147, 1)"><b>Berlangganan</b></font><br><br><br>
      <form method="POST" action="berlangganan2.php">
          <div class="form-group">
            <label for="exampleInputEmail1" style="color:	rgb(47, 37, 25);">Masukan Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          </div><br>
          <div class="form-group">
          <label for="exampleInputPassword1" style="color:	rgb(47, 37, 25);">Masukan Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="pasword">
        </div><br>
        <div class="form-group">
            <label for="exampleInputtext1" style="color:	rgb(47, 37, 25);">Masukan Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" name="nama">
          </div><br>
          <div class="form-group">
          <label for="exampleFormControlSelect1" style="color:	rgb(47, 37, 25)">Masukan Nama BANK</label>
          <select class="form-control" id="exampleFormControlSelect1" name="bank">
            <option>Bank BJB</option>
            <option>Bank MANDIRI</option>
            <option>Bank BRI</option>
            <option>Bank SYARIAH</option>
            <option>Bank BNI</option>
          </select>
        </div><br>
        <div class="form-group">
            <label for="exampleInputtext2" style="color:	rgb(47, 37, 25);">No Rekening</label>
            <input type="text" class="form-control" id="exampleInputname2" aria-describedby="textHelp" name="rek">
          </div><br>
          <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" style="background-color:rgba(187, 59, 14, 1);" name="berlangganan">Berlangganan</button>
            </div>
        </div>
      </form>
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