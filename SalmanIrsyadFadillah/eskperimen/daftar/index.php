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


    <br><br>
    <!-- CARDs -->
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="card-header">
                Tambah Pendaftaran
                <center><a href="create.php" class="btn btn-primary">Tambah Data</a></center>
            </div>
            <div class="card-body">
                <br>

                <!-- TABLE DOSEN -->
                <table class="table table-striped  ">
                    <thead>
                        <tr>
                            <th scope="">No</th>
                            <th scope="">Kode Pendaftaran</th>
                            <th scope="">Nama</th>
                            <th scope="">Tanggal Lahir</th>
                            <th scope="">Tempat Lahir</th>
                            <th scope="">Jenis Kelamin</th>
                            <th scope="">Agama</th>
                            <th scope="">Jurusan</th>
                            <th scope="">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include '../database.php';
                        $daftar =  new Pendaftaran();
                        $no = 1;
                        foreach ($daftar->index() as $data) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $data['kode_pendaftaran'] ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['tanggal_lahir'] ?></td>
                                <td><?php echo $data['tempat_lahir'] ?></td>
                                <td><?php echo $data['jenis_kelamin'] ?></td>
                                <td><?php echo $data['agama'] ?></td>
                                <td><?php echo $data['jurusan'] ?></td>

                                <td>
                                    <a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Show</a>
                                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
                                    <form action="proses.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <input type="hidden" name="aksi" value="delete">
                                        <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                            Delete
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <!-- /TABLE DOSEN -->
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>