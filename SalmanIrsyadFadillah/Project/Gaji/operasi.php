<?php
include '../database2.php';
$gaji = new gaji();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $bpjs = $_POST['bpjs'];
 

    if ($aksi == "create"){
        $gaji->create($nama,$jabatan,$pendidikan,$bpjs);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $gaji->update($id,$nama,$jabatan,$pendidikan,$bpjs);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $gaji->delete($id);
        header("location:index.php");
    }
}
?>