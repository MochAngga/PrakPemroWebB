<?php
    $arr = [
        [
            'nama' => 'angga',
            'asal' => 'Situbondo',
            'usia' => '17'
        ],
        [
            'nama' => 'atta',
            'asal' => 'malang',
            'usia' => '20'
        ],
        [
            'nama' => 'rasyid',
            'asal' => 'madiun',
            'usia' => '21'
        ]
    ];

    $arr2 = ['angga', 'Situbondo', '17']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Asal</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $mhs): ?>
                <tr>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['asal'] ?></td>
                    <td><?= $mhs['usia'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>