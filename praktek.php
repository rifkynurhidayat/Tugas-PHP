<?php
    for ($i=1; $i<=9; $i++) {
        if ($i%2){
            $angka = $i. " adalah bilangan ganjil";
        }else{
            $angka = $i. "adalah bilangan genap";
        }
        echo $angka. "<br>";
    }

?>