<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Show Data Penggajihan</title>
  </head>
  <body style="background: #66B032;">
        <br><br><br>
        <div style="color: #EBF7E3;">
            <center><h1><b>Show Data Pt.ABC</b></h1></center>
            </div>
        <br><br><br>
        <!-- CARDs -->
        <div class="container">
        <div class="card" style="border-color:#EBF7E3">
            <div class="card-header" style="background-color: #EBF7E3 ;color:#375F1B;">
               <h3><b> Data Penggajihan Pt.ABC </b></h3>
            </div>
            <div class="card-body" style="background-color: #EBF7E3 ;color:#375F1B;">
            <?php
                include '../database2.php';
                $gaji = new gaji();
                foreach ($gaji->edit($_GET['id']) as $data) {
                    $id = $data['id'];
                    $nama = $data['nama'];
                    $jabatan = $data['jabatan'];
                    $pendidikan = $data['pendidikan'];
                    $bpjs = $data['bpjs'];
                }
            ?>
            <form action="" method="">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label> 
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" value="<?php echo $jabatan; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" name="pendidikan" value="<?php echo $pendidikan; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">BPJS</label>
                        <input type="text" class="form-control" name="bpjs" value="<?php echo $bpjs; ?>" disabled>
                    </div>
                </form>

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