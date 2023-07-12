<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Penilaian</title>
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
    <h1>Penilaian Mata Pelajaran Produktif</h1>
    <img src="logo.png" style="width: 250px">
    <div class="card" style="width: 35rem;">
    <div class="card-header" style="background-color:MediumTurquoise;color:white">
       <h3> Masukan Jumlah Siswa</h3>
    </div>
    <div class="card-body" align ="left" style="background-color:whitesmoke">
    <form method ="POST" action = "">
        <div class="form-group">
            <label for="exampleInputnumber1">Jumlah Siswa</label>
            <input type="number" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp" name="jml"><br>
            <input type="submit" name="proses" value="Proses" style="background-color:MediumTurquoise;color : white" class="btn btn-primary">
        </div>
      </form>
    </div>
    </div>
    </div>
    <br><br>
    <?php
    if (isset($_POST ['proses'])){
        $jml = $_POST ['jml'];
        for($i = 1; $i <= $jml; $i++){
            echo '<form method ="POST" action = "dtnilai.php"> 
            <center>
            <div class="card" style="width: 40rem;" align="center">
            <div class="card-header" style="background-color:MediumTurquoise;color:white">
               <h3>Data Siswa Ke - '.$i.'</h3>
            </div>
            <div class="card-body" align ="left" style="background-color:whitesmoke">
                <div class="form-group">
                    <label for="exampleInputnumber1">NIS</label>
                    <input type="number" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp" name=nis[]>
                    <br>
                    <label for="exampleInputText1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="TextHelp" name=nama[]>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kelas</label>
                        <select class="form-control" id="exampleFormControlSelect1" name=kelas[]value=>>
                        <option>XI RPL 1</option>
                        <option>XI RPL 2</option>
                        <option>XI RPL 3</option>
                        </select>
                    </div>
                    <br><br>
                    <h2 align="center"><i>Nilai Produktif</i></h2>
                    <label for="exampleInputnumber1">Nilai Bulanan <b>(35%)</b></label>
                    <input type="number" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp" name=pro[]>
                    <br>
                    <label for="exampleInputnumber1">Nilai PTS <b>(15%)</b></label>
                    <input type="number" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp" name=pts[]>
                    <br>
                    <label for="exampleInputnumber1">Nilai PAS <b>(20%)</b></label>
                    <input type="number" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp" name=pas[]>
                    <br>
                    <label for="exampleInputnumber1">Nilai Kehadiran <b>(30%)</b></label>
                    <input type="number" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp" name=hadir[]>
                    <br>
                </div>
                </div>
                </div>
                </div>
                <br><br>';
        }
        echo'<input type="submit" name="simpan" value="Simpan" style="background-color:MediumTurquoise;color : white;width: 40rem;" class="btn btn-primary">
        </center></form>';
    }
    ?>
    </div>
    <br><br><br>
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