<?php

    $vt_sunucu="localhost";
    $vt_kullanici="root";
    $vt_sifre="";
    $vt_adi="moto incele";

    $baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);
    mysqli_set_charset($baglan,"UTF8");

    if(!$baglan)
    {
        die("Veritabanı baglantı işlemi başarısız".mysqli_connect_error());
    }

?>