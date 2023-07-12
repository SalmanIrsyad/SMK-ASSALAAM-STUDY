<?php

$listMahasiswaJSON = '[
  { "nama": "Nurul Huda" },
  { "nama": "Renza Ilhami Risqi" },
  { "nama": "Taufan Aji" },
  { "nama": "Rahmad Dwi Oktanto" }
]';

$listMahasiswa = json_decode($listMahasiswaJSON);

foreach ($listMahasiswa as $key => $mahasiswa) {
  echo "{$key}. Nama: {$mahasiswa->nama} <br>";
}
?>