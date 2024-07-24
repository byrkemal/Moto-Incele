
<?php

echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Haber Güncelle</title>
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
        <h1>HABER GÜNCELLE</h1><br>
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            <label for="baslik"><h2>Güncellenecek Haber Başlığı:</h2></label>
            <input type="text" id="baslik" name="baslik" style="width: 230px; height: 50px;"><br>
            <label for="yeni_baslik"><h2>Yeni Başlık:</h2></label>
            <input type="text" id="yeni_baslik" name="yeni_baslik" style="width: 230px; height: 50px;"><br>
            <label for="yeni_icerik"><h2>Yeni İçerik:</h2></label>
            <textarea id="yeni_icerik" name="yeni_icerik"style="width: 230px; height: 50px;"></textarea><br><br>
            <input type="submit" name="submit" value="Haberi Güncelle"style="width: 238px; height: 50px; font-size:15px">
        </form>
        </div>';
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "uyelik"; 

    $baslik = $_POST['baslik'];
    $yeni_baslik = $_POST['yeni_baslik'];
    $yeni_icerik = $_POST['yeni_icerik'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    $sql_select = "SELECT id FROM haber WHERE baslik = '$baslik'";
    $result = $conn->query($sql_select);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        $id = $row["id"];

        $sql_update = "UPDATE haber SET baslik = '$yeni_baslik', icerik = '$yeni_icerik' WHERE id = $id";

        if ($conn->query($sql_update) === TRUE) {
            echo "Haber başarıyla güncellendi";
        } else {
            echo "Hata: " . $sql_update . "<br>" . $conn->error;
        }
    } else {
        echo "Haber bulunamadı";
    }

    $conn->close();
}

echo '
    </body>
    </html>';
    
?>
