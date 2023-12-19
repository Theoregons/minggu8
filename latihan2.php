<?php 
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]    
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
    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <h4><?= $b ?></h4>
        <?php  endforeach; ?>
    <?php  endforeach; ?>
    
</body>
</html>