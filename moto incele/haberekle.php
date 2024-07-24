<?php

echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Haber Ekle</title>
        <style>
            .kutu{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); 
            }
            body{
                background-image: url(img/panel.jpg);
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }  
        </style>
    </head>
    <body>
        <div class="kutu">
        <h1>HABER EKLE</h1><br>
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            <label for="baslik"><h2>Başlık:</h2></label>
            <input type="text" id="baslik" name="baslik"style="width: 230px; height: 50px;"><br>
            <label for="icerik"><h2>İçerik:</h2></label>
            <textarea id="icerik" name="icerik" style="width: 230px; height: 50px;"></textarea><br><br>
            <input type="submit" name="submit" value="Haber Ekle"style="width: 238px; height: 50px;">
        </form>
        </div>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "uyelik"; 

    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    $sql = "INSERT INTO haber (baslik, icerik) VALUES ('$baslik', '$icerik')";

    if ($conn->query($sql) === TRUE) {
        echo "Yeni haber başarıyla eklendi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
}

echo '
    </body>
    </html>';
    
?>
