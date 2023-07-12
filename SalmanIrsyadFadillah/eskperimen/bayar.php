<?php

class Pembayaran extends Database
{

    //menampilkan data dosen ke index.php
    public function index()
    {
        $datapembayaran = mysqli_query(
            $this->koneksi,
            "select pembayaran.id,pembayaran.kode_pembayaran, pembayaran.tanggal_pembayaran, 
            pembayaran.uang_pendaftaran, pembayaran.uang_serangam, 
            pembayaran.uang_kegiatan, pembayaran.total_pembayaran, pendaftaran.nama 
            from pendaftaran 
            join pembayaran 
            on pendaftaran.id = pembayaran.id_pendaftaran"
            // "select pembayaran.id,pembayaran.kode_pembayaran, pembayaran.tanggal_pembayaran,"

        );

        return $datapembayaran;
    }

    public function create($kode_pembayaran, $tanggal_pembayaran, $uang_pendaftaran, $uang_serangam, $uang_kegiatan, $total_pembayaran, $id_pendaftaran)
    {

        mysqli_query(
            $this->koneksi,
            "insert into pembayaran values  (null,'$kode_pembayaran', '$tanggal_pembayaran', '$uang_pendaftaran', '$uang_serangam', 
            '$uang_kegiatan', '$total_pembayaran', '$id_pendaftaran')"

        );
    }

    public function edit($id)
    {
        $datapembayaran = mysqli_query(
            $this->koneksi,
            "select * from pembayaran where id='$id'"

        );

        return $datapembayaran;
    }
    public function update($id,$kode_pembayaran, $tanggal_pembayaran, $uang_pendaftaran, $uang_serangam, $uang_kegiatan, $total_pembayaran, $id_pendaftaran)
    {
        mysqli_query(
            $this->koneksi,
            "update pembayaran set kode_pembayaran='$kode_pembayaran', tanggal_pembayaran='$tanggal_pembayaran', 
            uang_pendaftaran='$uang_pendaftaran', uang_serangam='$uang_serangam',
            uang_kegiatan='$uang_kegiatan', total_pembayaran='$total_pembayaran', id_pendaftaran='$id_pendaftaran' where id='$id'"
        );
    }

    public function show($id)
    {
        $datapembayaran = mysqli_query(
            $this->koneksi,
            "select pembayaran.id,pembayaran.kode_pembayaran, pembayaran.tanggal_pembayaran, 
            pembayaran.uang_pendaftaran, pembayaran.uang_serangam, 
            pembayaran.uang_kegiatan, pembayaran.total_pembayaran, pendaftaran.nama 
            from pendaftaran 
            join pembayaran 
            on pendaftaran.id = pembayaran.id_pendaftaran where pembayaran.id='$id'"

        );
        return $datapembayaran;
    }

    public function delete($id)
    {
        mysqli_query(
            $this->koneksi,
            "delete from pembayaran where id='$id'"
        );
    }
}
