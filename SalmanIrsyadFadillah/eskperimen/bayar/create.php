<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jurusan TKRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

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
    <br>
    <br>
    <br>
    <!-- CARDs -->
    <div class="container">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header">
                    Tambah Pembayaran
                </div>
                <div class="card-body">

                    <form action="../bayar/proses.php" method="post">
                        <input type="hidden" name="aksi" value="create">
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Kode Pembayaran</b></label>
                            <input type="number" class="form-control" name="kode_pembayaran">
                            <small id="emailHelp" class="form-text text-muted">Masukan Kode Pendaftaran</small>
                        </div>
                        <br>
                        <small id="emailHelp" class="form-text text-muted">Pilih Agama</small>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Jurusan</b></label>
                            <select name="id_pendaftaran" class="form-control">
                                <?php
                                include '../database.php';
                                $daftar =  new Pendaftaran();
                                $no = 1;
                                foreach ($daftar->index() as $data) {
                                ?>
                                    <option value="<?php echo $data['id'] ?>"><?php echo $data['nama'] ?></option>
                                <?php } ?>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">Pilih Jurusan</small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Tanggal Pembayaran</b></label>
                            <input type="date" class="form-control" name="tanggal_pembayaran">
                            <small id="emailHelp" class="form-text text-muted">Masukan Tanggal Pembayaran</small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Uang Pendaftaran</b></label>
                            <input type="number" class="form-control" name="uang_pendaftaran">
                            <small id="emailHelp" class="form-text text-muted">Masukan Uang Pendaftaran</small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Uang Seragam</b></label>
                            <input type="number" class="form-control" name="uang_serangam">
                            <small id="emailHelp" class="form-text text-muted">Masukan Uang Seragam</small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Uang Kegiatan</b></label>
                            <input type="number" class="form-control" name="uang_kegiatan">
                            <small id="emailHelp" class="form-text text-muted">Masukan Uang Kegiatan</small>
                        </div>
                        <br>
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                    </form>

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