<?php

include("baglanti2.php");

if(isset($_POST["giris"]))
{
    $name = $_POST["usrnm"];
    $password = $_POST["psw"];
    if(isset($_POST["usrnm"],$_POST["psw"]))
{
  if($_POST["usrnm"]=="kemal" && $_POST["psw"]=="12345")
  {
    $_SESSION["user"]=$_POST["usrnm"];
    header("location:panel.php");
  }

  else{
    $sorgu = "SELECT * FROM kayit WHERE kullanici_adi='$name' AND parola='$password'";
    $sonuc = mysqli_query($baglanti, $sorgu);

    if(mysqli_num_rows($sonuc) == 1) {
        echo "Giriş başarılı. Hoş geldiniz, " . $name;
        header('Refresh:1;index.php');
    } else {
        echo "Kullanıcı adı veya parola yanlış";
    }
  }
}

    mysqli_close($baglanti);
}

echo ' 
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="stylekayit.css">
      <title>ÜYELİK İŞLEMİ</title>
    </head>
    <body>
      <form action="giris.php" method="post" style="max-width:500px;margin:auto" class="form">
          <h2>ÜYE GİRİŞ İŞLEMİ</h2>
          <div class="input-container">
            <i class="fa fa-user icon "></i>
            <input class="input-field" type="text" placeholder="Kullanıcı adı" name="usrnm">
        </div>
        <div class="input-container">
          <i class="fa fa-key icon"></i>
          <input class="input-field" type="password" placeholder="Parola" name="psw">
        </div>

        <button type="submit" class="btn" name="giris">Giriş İşlemi</button>

      </form>
    </body>
  </html> ';
  
  ?>
