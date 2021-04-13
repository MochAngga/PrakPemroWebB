<?php
    require 'balok.php';

    $balok = new Balok;
         
    $balok->setPanjang (4);
    $balok->setLebar (3);
    $balok->setTinggi (5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101085</title>
</head>
<body>
    <h3>Moch. Angga Riskianto</h3>
    <h1>Bangun Ruang : Balok</h3>
    
    <ul>
        <li>Panjang :<?=$balok->getPanjang();?></li>
        <li>Lebar : <?=$balok->getLebar();?></li>
        <li>Tinggi : <?=$balok->getTinggi();?></li>
        <li>Luas : <?=$balok->getLuas();?></li>
        <li>Volume : <?=$balok->getVolume();?></li>
    </ul>
</body>
</html>