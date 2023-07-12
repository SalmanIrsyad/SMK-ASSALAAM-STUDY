<?php

class gaji extends Database{
    //menampilkan data dosen ke index.php
    public function index(){
        $datagaji = mysqli_query($this->koneksi,"select * from gaji");
        return $datagaji;
    }
    public function create($nama,$jabatan,$pendidikan,$bpjs){
        mysqli_query($this->koneksi,
            "insert into gaji values (null,'$nama','$jabatan','$pendidikan','$bpjs')"
        );
    }
    // memilih data dosen yang akan diubah
    public function edit($id)
    {
        $datagaji = mysqli_query($this->koneksi, 
                    "select * from gaji  where id='$id'"
                );

        return $datagaji;
    }
    // merubah data dosen
    public function update($id,$nama,$jabatan,$pendidikan,$bpjs)
    {
        mysqli_query(
            $this->koneksi,
            "update gaji set nama='$nama',jabatan='$jabatan',pendidikan='$pendidikan',bpjs='$bpjs'  where id='$id'"
        );
    }
    // menampilkan data dosen berdasarkan id
    public function show($id)
    {
        $datagaji = mysqli_query($this->koneksi, 
                    "select * from gaji where id='$id'"
                );

        return $datagaji;
    }
    // menghapus data dosen
         public function delete($id)
         {
             mysqli_query($this->koneksi, "delete from gaji where id='$id'"
                     );
 
         }
    
}

?>