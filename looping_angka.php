<?php
    for($i=0; $i<9; $i++){
        //looping untuk menampilkan baris 1 sampai 9
        for($j=0; $j<=$i; $j++){
            echo $j." ";
        //looping kedua untuk mencetak angka dari 0 sampai nilai $i pada setiap baris
        }
        echo "<br>";
        //setiap terjadi looping maka akan dibuat baris baru
    }

?>