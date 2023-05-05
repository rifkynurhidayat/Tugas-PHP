<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek 2</title>
</head>
<body>
    <table border="1">
        <tr style='background-color:coral'>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php 
            for($i = 1; $i<11;  $i++){
                if($i % 2 == 0){
                    echo "<tr>";
                }else{
                    echo "<tr style='background-color:yellow'>";
                }
                echo "<td>" .$i. "</td>";
                echo "<td>" ."Nama ke - ". $i. "</td>";
                echo "<td>" ."Kelas ke - " .(10-$i+1) ."</td>";
                echo "</tr>"; 
            }
        ?>
    </table>
    
</body>
</html>