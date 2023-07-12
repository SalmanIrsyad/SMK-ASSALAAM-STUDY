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

      <!-- BERANDA -->
      <br><br>
      <center>
        <!-- Gaji -->
        <form method="POST" action="gaji2.php">
            <h2>Penggajihan Karyawan</h2>
            <h1>PT.Selalu Makmur Jaya</h1>
            <table>
                <tr>
                    <td>Nama Bendahara</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Nama Pekerja</td>
                    <td>:</td>
                    <td><input type="text" name="namap"></td>
                </tr>
                <tr>
                <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>

                </tr>
                <tr>
                <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><select name="jabatan">
                        <option value="Direktur">Direktur</option>
                        <option value="Manager">Manager</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="OB">OB</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name="pendidikan">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Lembur</td>
                    <td>:</td>
                    <td><input type="text" name="lembur">Hari/Rp.20.000
                    </td>
                </tr>
                <tr>
                    <td>Potongan</td>
                    <td>:</td>
                    <td><input type="number" name="potongan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Kirim"></td>
                </tr>
            </table>
        </form>
    </center>

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
