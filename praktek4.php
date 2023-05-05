<?php
        $json_string = file_get_contents('data.json');
        $json = json_decode($json_string,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{

            margin: auto;
        }
        h2{
            background-color: greenyellow;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Daftar Nilai</h2>
<table border="1" cellpadding="18" cellspacing="0" style="text-align: center;">
        <tr>
            <td style=" font-weight: bold;">No.</td>
            <td style=" font-weight: bold;">Nama</td>
            <td style=" font-weight: bold;">Tanggal Lahir</td>
            <td style=" font-weight: bold;">Umur</td>
            <td style=" font-weight: bold;">Alamat</td>
            <td style=" font-weight: bold;">Kelas</td>
            <td style=" font-weight: bold;">Nilai</td>
            <td style=" font-weight: bold;">Hasil</td>
        </tr>

        <tr style='background-color:aquamarine'>
        <?php $i=1; ?>
        <?php foreach ($json as $data) : ?>
            <td><?= $i; ?></td>
            <td><?= $data["nama"]; ?></td>
            <td><?= $data["tanggal_lahir"]; ?></td>
            <td><?= $data["umur"]; ?></td>
            <td><?= $data["alamat"]; ?></td>
            <td><?= $data["kelas"]; ?></td>
            <td><?= $data["nilai"]; ?></td>
            <td><?= $data["hasil"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    
</body>
</html>
  

  
