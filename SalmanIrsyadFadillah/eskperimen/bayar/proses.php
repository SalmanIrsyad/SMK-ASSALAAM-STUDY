<?php
include '../database.php';
$bayar = new Pembayaran();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $kode_pembayaran = $_POST['kode_pembayaran'];
    $nama = $_POST['nama'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $uang_pendaftaran = $_POST['uang_pendaftaran'];
    $uang_serangam = $_POST['uang_serangam'];
    $uang_kegiatan = $_POST['uang_kegiatan'];
    $id_pendaftaran = $_POST['id_pendaftaran'];
    



    if ($aksi == "create") {
        $bayar->create($kode_pembayaran, $tanggal_pembayaran, $uang_pendaftaran, $uang_serangam, $uang_kegiatan, $total_pembayaran, $id_pendaftaran);
        header("location:index.php");
    } else if ($aksi == "update") {
        $bayar->update($id,$kode_pembayaran, $tanggal_pembayaran, $uang_pendaftaran, $uang_serangam, $uang_kegiatan, $total_pembayaran, $id_pendaftaran);
        header("location:index.php");
    } else if ($aksi == "delete") {
        $bayar->delete($id);
        header("location:index.php");
    }
}
