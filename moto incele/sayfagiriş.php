<?php

echo '
  <!DOCTYPE html>
  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stylegiriş.css">
  </head>
  <body>

    <form action="sayfagiriş.php" method="post" style="max-width:500px;margin:auto" class="form">
      <h2>Giriş Paneli</h2>
        <div class="input-container">
          <i class="fa fa-user icon "></i>
          <input class="input-field" type="text" placeholder="Kullanıcı adı" name="usrnm">
        </div>
      
        <div class="input-container">
          <i class="fa fa-key icon"></i>
          <input class="input-field" type="password" placeholder="Parola" name="psw">
        </div>
          <button type="submit" class="btn">Giriş</button>
    </form>

  </body>
  </html>';

session_start();

include("baglanti2.php");

if(isset($_POST["usrnm"],$_POST["psw"]))
  {
    $name = $_POST["usrnm"];
    $password = $_POST["psw"];
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
    
?>