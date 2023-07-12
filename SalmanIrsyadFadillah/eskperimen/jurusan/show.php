<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jurusan TKRO</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<style>
  .garis {
    text-decoration: none;
  }
</style>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="../dosen/index.php">Dosen <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Mahasiswa <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <br>
  <br>
  <!-- CARDs -->
  <div class="container">
      <div class="card shadow p-3 mb-5 bg-body rounded">
        <div class="card-body ">
          <center>
            <h3>Data Jurusan</h3>
            <h3>SMK Assalaam Bandung</h3>
            <h5>TAHUN AJARAN 2021-2022</h5>
            <img src="../home/assalaam.png" alt="" width="200" height="150">
          </center>
          <br>
          <?php
          include '../database.php';
          $jurusan = new Jurusan();
          foreach ($jurusan->show($_GET['id']) as $data) {
            $id = $data['id'];
            $kode_jurusan = $data['kode_jurusan'];
            $jurusan = $data['jurusan'];
          }
          ?>
          <table>
            <form action="" method="">
              <input type="hidden" name="aksi" value="update">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1"><b>Kode Jurusan</b></label>
                <input type="text" class="form-control" name="nim" value="<?php echo $kode_jurusan; ?>" disabled>
                <tr>
                  <td></td>
                </tr>

              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1"><b>Jurusan</b></label>
                <input type="text" class="form-control" name="nama" value="<?php echo $jurusan; ?>" disabled>
              </div>
              <br>
            </form>
          </table>
        </div>
      </div>
    </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>