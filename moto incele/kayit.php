
<?php

include("baglanti2.php");

if(isset($_POST["kaydet"]))
{
    $name=$_POST["usrnm"];
    $email=$_POST["email"];
    $password=$_POST["psw"];

    $ekle = "INSERT INTO kayit (kullanici_adi, email, parola) VALUES ('$name', '$email', '$password')";
    $calistirekle = mysqli_query($baglanti, $ekle);
    if ($calistirekle) {
        echo '<div class="alert alert-success" role="alert">
        Kayıt Başarılı bir şekilde eklendi.
        </div>';
    } 
    else {
        echo '<div class="alert alert-danger" role="alert">
              Kayıt Eklenirken bir problem oluştu.
              </div>';
    }
mysqli_close($baglanti);

}

echo'
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="stylekayit.css">
      <title>ÜYELİK İŞLEMİ</title>
      
    </head>
    <body>
      <form action="kayit.php" method="post" style="max-width:500px;margin:auto" class="form">
        <h2>ÜYE KAYIT İŞLEMİ</h2>
          <div class="input-container">
            <i class="fa fa-user icon "></i>
            <input class="input-field" type="text" placeholder="Kullanıcı adı" name="usrnm">
          </div>

          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="email" placeholder="email" name="email">
          </div>

          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Parola" name="psw">
          </div>

          <button type="submit" class="btn" name="kaydet">KAYIT OL</button>

      </form>
      <form action="sayfagiriş.php"><br>
        <button type="submit" class="btn" name="kaydet" style="background-color: #DAA520;width: 500px;margin-left: 511px;">GİRİŞ YAP</button>
      </form><br>              
               
    </body>
  </html>';
  
?>