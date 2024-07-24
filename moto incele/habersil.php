<?php

echo ' 
    <!DOCTYPE html>
    <html>
    <head>
        <title>Haber Sil</title>
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
        <h1>HABER SİL</h1>
            <form action="'.$_SERVER['PHP_SELF'].'" method="post">
                <label for="baslik"><h2>Silinecek Haber Başlığı:</h2></label>
                <input type="text" id="baslik" name="baslik"style="width: 230px; height: 50px;"><br><br>
                <input type="submit" name="submit" value="Haberi Sil"style="width: 238px; height: 50px;">
            </form>
        </div>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "uyelik"; 

$baslik = $_POST['baslik'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql_delete = "DELETE FROM haber WHERE baslik = '$baslik'";

if ($conn->query($sql_delete) === TRUE) {
    echo "Haber başarıyla silindi";
} else {
    echo "Hata: " . $sql_delete . "<br>" . $conn->error;
}

$conn->close();
}
echo'
</body>
</html>';

?>