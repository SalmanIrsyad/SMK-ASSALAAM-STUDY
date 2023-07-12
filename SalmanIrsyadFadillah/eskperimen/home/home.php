<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
  .garis {
    text-decoration: none;
  }
</style>

<body>

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
  <center>

    <h1>SELAMAT DATANG </h1>
    <h1>DI WEBSITE PENDAFTARAN SISWAN BARU</h1>
    <h1>SMK ASSALAAM BANDUNG</h1>
    <h3>TAHUN AJARAN 2021-2022</h3>
  </center>



  <center>
    <div class="container">
      <div class="row ">
        <div class="col-4">
          <div class="card mb-3 p-3 shadow p-3 mb-5 bg-body rounded" style="width:21rem">
            <img src="tbsm.jpeg" alt="" width="300" height="200">
            <br>
            <h2 class="card-title"><a href="tkro.php" class="text-dark garis">Jurusan TKRO</a></h2>
          </div>
        </div>

        <div class="col-4">
          <div class="card mb-3 p-3 shadow p-3 mb-5 bg-body rounded" style="width:21rem">
            <img src="tkro.jpeg" alt="" width="300" height="200">
            <br>
            <h2 class="card-title"><a href="tkro.php" class="text-dark garis">Jurusan TBSM</a></h2>
          </div>
        </div>

        <div class="col-4">
          <div class="card mb-3 p-3 shadow p-3 mb-5 bg-body rounded" style="width:21rem">
            <img src="rpl.jpeg" alt="" width="300" height="200">
            <br>
            <h2 class="card-title"><a href="tkro.php" class="text-dark garis">Jurusan RPL</a></h2>
          </div>
        </div>

      </div>
    </div>

  </center>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>