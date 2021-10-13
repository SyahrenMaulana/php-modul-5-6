<?php
    //nomor 7 : membuat rumus luas dan volume balok
    function luas_balok($panjang, $lebar, $tinggi){
        $luas = 2 * ($panjang * $lebar + $panjang * $tinggi + $tinggi * $lebar);
        return $luas;
    }
    function volume_balok($panjang, $lebar, $tinggi){
        $volume = $panjang * $lebar * $tinggi;
        return $volume;
    }

    $panjang = 15;
    $tinggi = 12;
    $lebar = 10;

    $luas = luas_balok($panjang, $lebar, $tinggi);
    $volume = volume_balok($panjang, $lebar, $tinggi);
    echo "Balok dengan <br> panjang = $panjang <br> tinggi = $tinggi <br> lebar = $lebar <br>";
    echo "Luas = $luas";
    echo "<br>";
    echo "Volume = $volume";
?>