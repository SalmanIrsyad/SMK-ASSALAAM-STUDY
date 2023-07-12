<?php

$kuliah = [
    [
        'dosen' => "Aceng Fikri",
        'mahasiswa' => "Dadang",
        'matakuliah' => 
        [
           ['makul' => "- RPL"],
           ['makul' => "- Database"],
           ['makul' => "- OOP"]
        ],

        'hobi' =>
        [
            ['hobb' => "Futsal"],
            ['hobb' => "Basket"],
        ]
    
    ],

    [
        'dosen' => "Aceng Fikri",
        'mahasiswa' => "Diding",
        'matakuliah' => 
        [
           ['makul' => "- RPL"],
           ['makul' => "- Database"],
           ['makul' => "- OOP"]
        ],
        'hobi' => 
        [
            ['hobb' => "Jogging"],
            ['hobb' => "Sepak Bola"],
        ]
       
    ],

    [
        'dosen' => "Aceng Fikri",
        'mahasiswa' => "Dudung",
        'matakuliah' => 
        [
           ['makul' => "- RPL"],
           ['makul' => "- Database"],
           ['makul' => "- OOP"]
        ],
        'hobi' => 
        [
            ['hobb' => "Otomotif"],
            ['hobb' => "Baket"],
        ]
       
    ],

    [
        'dosen' => "Ujang Betok",
        'mahasiswa' => "Sasa",
        'matakuliah' => 
        [
           ['makul' => "- RPL"],
           ['makul' => "- Database"],
           ['makul' => "- OOP"]
        ],
        'hobi' => 
        [
            ['hobb' => "Melukis"],
            ['hobb' => "Menulis"],
        ]
        
    ],

    [
        'dosen' => "Ujang Betok",
        'mahasiswa' => "Sisi",
        'matakuliah' => 
        [
           ['makul' => "- RPL"],
           ['makul' => "- Database"],
           ['makul' => "- OOP"]
        ],
        'hobi' =>
        [
           ['hobb' => "Renang"],
           ['hobb' => "Golf"],
        ] 
        
    ],

    [
        'dosen' => "Ujang Betok",
        'mahasiswa' => "Susu",
        'matakuliah' => 
        [
           ['makul' => "- RPL"],
           ['makul' => "- Database"],
           ['makul' => "- OOP"]
        ],
        'hobi' => 
        [
           ['hobb' => "Baket"],
           ['hobb' => "Renang"],
        ]
       
    ],

   
];

foreach($kuliah as $data){
    echo "Nama Dosen : " . $data['dosen'] . "<br>";
    echo "Daftar Mahasiswa : ". $data['mahasiswa'] . "<br>";
    echo "Mata Kuliah : ";
    echo "<ul>";
   foreach($data['matakuliah'] as $isi){
       echo "<li>" . $isi['makul'] . "</li>";
   }
   echo "</ul>";

   echo "Hobi : ";
   echo "<ul>";
   foreach($data['hobi'] as $hobi){
       echo "<li>" . $hobi['hobb'] . "</li>";
   }
   echo "</ul> <hr>";
}
?>