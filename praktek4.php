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
            <td style=" font-weight: bold;">No</td>
            <td style=" font-weight: bold;">Nama</td>
            <td style=" font-weight: bold;">Tanggal Lahir</td>
            <td style=" font-weight: bold;">Umur</td>
            <td style=" font-weight: bold;">Alamat</td>
            <td style=" font-weight: bold;">Kelas</td>
            <td style=" font-weight: bold;">Nilai</td>
            <td style=" font-weight: bold;">Hasil</td>
        </tr>
        <?php
        $i=1;
        $json_string = file_get_contents('data.json');
        $json = json_decode($json_string,true);
         foreach ($json as $data){
            $tanggal_lahir = $data['tanggal_lahir'];
            $umur = new DateTime($tanggal_lahir);
            $sekarang = new DateTime();
            $usia = $sekarang->diff($umur);
            $nilai = $data["nilai"];
            if ($nilai >=90 ){
                $hasil = "A";
            }else if($nilai >=80){
                $hasil= "B";
            }else if($nilai >=70){
                $hasil= "C";
            }else if ($nilai<=65){
               $hasil= "D";
            }else{
                $hasil="E";
            }
        ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama"]; ?></td>
            <td><?= $data["tanggal_lahir"]; ?></td>
            <td><?= $usia->y."&nbsp"."Tahun" ?></td>
            <td><?= $data["alamat"]; ?></td>
            <td><?= $data["kelas"]; ?></td>
            <td><?= $nilai; ?></td>
            <td><?= $hasil; ?></td>
        </tr>
        <?php $i++; ?>
     <?php } ?>
    </table>
</body>
</html>
  

  
