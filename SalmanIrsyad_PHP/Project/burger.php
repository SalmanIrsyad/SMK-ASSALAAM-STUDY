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
      <div class="container" align ="center">
          <table>
              <tr>
                  <td>
                    <div class="card" style="width: 20rem;border-radius= 10px;background-color:whitesmoke" align="center">
                        <div class="card-body" align="center">
                            <table align="left" style="background-color:whitesome; border" >
                              <tr>
                              <th colspan="3" align="center"><h1>Paket</h1></th>
                              </tr>
                              <tr>
                                  <td>Paket Jomblo</td>
                                  <td>:</td>
                                  <td>Rp 20.000</td>
                              </tr>
                              <tr>
                                  <td>Paket Berdua</td>
                                  <td>:</td>
                                  <td>Rp 25.000</td>
                              </tr>
                              <tr>
                                  <td>Paket Bersama</td>
                                  <td>:</td>
                                  <td>Rp 30.000</td>
                              </tr>
                          </table>
                          </div>
                      </div>
                  </td>
          </table>
          <br><br><br>
        
            </div>
        </div>
    <br><br><br><br>
    <center>
    <div class="card" style="width: 35rem;border-radius= 10px;background-color:whitesmoke">
        <div class="card-body" >
        <!-- Gaji -->
        <form method="POST" action="burger2.php">
            <h2>Pembayaran</h2>
            <table>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" name="nama"></td>
                </tr>
                <tr>
                    <td>Pilih Paket</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" name="Paket"></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td>:</td>
                    <td><input type="number" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" name="jml"></td>
                </tr>
                <tr>
                <td>Berlangganan</td>
                    <td>:</td>
                    <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="sudah" id="defaultCheck1" name="ber">
                      <label class="form-check-label" for="defaultCheck1">
                        Sudah Berlangganan
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="belum" id="defaultCheck1" name="ber">
                      <label class="form-check-label" for="defaultCheck1">
                        Belum Berlangganan
                      </label>
                    </div>
                    </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" class="btn btn-primary" name="Simpan" style="background-color:rgb(187, 59, 14)">Pesan</button</td>
                </tr>
            </table>
        </form>
    </center>
    </div>
    <br><br><br><br>
  </body>
</html> 

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
