<?php 
    // $mahasiswa =[ 
    //     ["Adam", "1212312", "Teknologi Informasi"],
    //     ["Bintang", "123456", "Teknologi Informasi"]
    // ];

    $mahasiswa =[ 
        ["nama" => "Adam", "Nim" => "1212312", "Jurusan" => "Teknologi Informasi"],
        ["nama" => "Bintang", "Nim" => "123456", "Jurusan" => "Teknologi Informasi"]
    ];
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <?php foreach ($mhs as $m) : ?>
            <h2><?=$m?></h2>
        <?php endforeach; ?>
    <?php endforeach; ?>
 </body>
 </html>