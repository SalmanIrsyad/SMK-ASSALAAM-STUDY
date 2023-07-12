<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terkini</title>
</head>
<body>
<?php
$berita = [
    [
        'kategori' => "Olahraga",
        'judul' => "<b>Persib Siap Raih Kemenangan di Laga Penting Kontra PSS</b>",
        'img'=>'<img src="persib.jpg" width="800" heigth="800">;',
        'artikel' => "Persib Bandung bersiap guna meraih kemenangan pada laga melawan PSS Sleman, Jumat (10/2) besok. Misi bangkit di laga ini diusung <br>
        oleh Maung Bandung setelah sebelumnya kalah dari Bhayangkara FC. Luizinho Passos mengatakan, timnya punya motivasi untuk memperagakan performa yang terbaik di lapangan.",
        'tanggal' => "10 February 2022"
    ],
    [
        'kategori' => "Kesehatan",
        'judul' => "<b>UPDATE 11 Februari: Kasus Aktif Covid-19 di Indonesia Capai 312.808</b>",
        'img'=>'<img src="korona.jpeg" width="800" heigth="800">;',
        'artikel' => "JAKARTA- Satuan Tugas Penanganan Covid-19 mencatat 312.808 kasus aktif, pada Jumat (11/2/2022). <br>
        Jumlahnya bertambah 24.622 kasus dari sehari sebelumnya. Kasus aktif ialah pasien yang masih terkonfirmasi positif dan menjalani perawatan di rumah sakit atau isolasi mandiri.<br> 
        Angka kasus aktif diperoleh dari pengurangan total kasus positif dengan angka kasus kesembuhan dan kematian.",
        'tanggal' => "10 February 2022"  
    ],
    [
        'kategori' => "Otomotif",
        'judul' => "<b>Hasil Tes MotoGP Mandalika Hari Kedua: Luca Marini Tercepat</b>",
        'img'=>'<img src="moto.jpg" width="800" heigth="800">;',
        'artikel' => "Lombok Tengah - Luca Marini jadi yang tercepat di tes MotoGP Mandalika hari kedua, Sabtu (12/2/2022). Pebalap VR46 Ducati itu mengungguli Marc Marquez.<br>
        Tes pramusim MotoGP 2022 hari kedua di Sirkuit Mandalika, Sabtu (12/2/2022), tuntas pada pukul 17.00 WITA. Luca Marini ngebut menjelang akhir sesi untuk mencatatkan waktu terbaik 1 menit 31,289 detik.<br>
        Adik Valentino Rossi itu unggul 0,192 detik atas Marc Marquez yang ada di posisi kedua. Maverick Vinales menyusul di urutan ketiga dengan selisih 0,227 detik dari Marini",
        'tanggal' => "Sabtu, 12 Feb 2022"  
    ],
    [
        'kategori' => "Pendidikan",
        'judul' => "<b>Nadiem Makarim Sebut Indonesia Masuki Masa Krisis Pembelajaran</b>",
        'img'=>'<img src="nadim.jpg" width="800" heigth="800">;',
        'artikel' => "Jakarta - Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Nadiem Makarim menilai Indonesia saat ini tengah berada di masa krisis pembelajaran.
         <br>Bahkan, pandemi Covid-19 semakin memperburuk situasi tersebut.<br> 
        Dia mengatakan hal itu tergambar jelas dari skor Programme for International Student Assessment (PISA) yang tak kunjung membaik dan masih jauh<br>
         dibandingkan rata-rata negara anggota Organisation for Economic Co-operation and Development (OECD) lainnya.",
        'tanggal' => " 9 Februari 2022 "  
    ],
    [
        'kategori' => "Gosip",
        'judul' => "<b>Rizky Billar dan Lesti Kejora Umumkan Kehamilan</b>",
        'img'=>'<img src="bilar.jpeg" width="800" heigth="800">;',
        'artikel' => "Pasangan selebriti Rizky Billar dan Lesti umumkan kehamilan anak pertama mereka. <br>
        Hal ini mereka umumkan dalam acara THE SECRET OF LESLAR Yang ditayangkan YouTube Rans Entertainment pada Selasa (21/9).",
        'tanggal' => "Selasa, 21 Sep 2021"  
    ],
    
];

foreach($berita as $data){
    echo '
    <div class="container">
    <p>Kategori - '.$data['kategori'].'</p><br>
    <center>
    <h1>'.$data['judul'].'</h1>
    '.$data['img'].' <br>
    </center>
    <br><br>
    <small>'.$data['tanggal'].'</small><br>
    <p>'.$data['artikel'].'</p><br>
    </div>
    <br><hr>';
}

?>

</body>
</html>