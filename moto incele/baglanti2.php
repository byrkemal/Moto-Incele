<?php

    $vt_host = "localhost";
    $vt_kullanici = "root";
    $vt_parola = ""; 
    $vt_adi = "uyelik";

    $baglanti = mysqli_connect($vt_host, $vt_kullanici, $vt_parola, $vt_adi);
    mysqli_set_charset($baglanti, "UTF8");

?>
