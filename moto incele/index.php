<?php 

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTO İNCELE</title>
    <style>
    .haber2 {
        color: #fff; 
        font-size: 20px; 
    }
    </style>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
    
    <section id="menu">
        <div id="logo">Moto İncele</div>
        <nav>

            <a href="index.php"><i class="fas fa-home ikon"></i>Anasayfa</a>
            <a href="#haberler"id="HaberlerLink"><i class="fa-solid fa-newspaper ikon"></i> Haberler</a>
            <script>
                document.getElementById('."'HaberlerLink'".').addEventListener('."'click'".', function() {
                  document.getElementById('."'Haberler'".').scrollIntoView({ behavior: '."'smooth'".' });
                });
              </script>
            <a href="#hakkımızda"id="HakkımızdaLink"><i class="fa-solid fa-circle-info ikon"></i>Hakkımızda</a>
            <script>
                document.getElementById('."'HakkımızdaLink'".').addEventListener('."'click'".', function() {
                  document.getElementById('."'Hakkımızda'".').scrollIntoView({ behavior: '."'smooth'".' });
                });
              </script>
            <a href="motorlar.php"><i class="fa-solid fa-motorcycle ikon"></i>Motosiklet</a>
            <a href="#iletişim" id="iletisimLink"><i class="fas fa-phone ikon"></i>İletişim</a>
                <script>
                    document.getElementById('."'iletisimLink'".').addEventListener('."'click'".', function() {
                     document.getElementById('."iletişim".').scrollIntoView({ behavior: '."'smooth'".' });
                });    
                </script>
            <a href="kayit.php"><i class="fa-solid fa-user ikon"></i>Giriş</a>  
        </nav>
    </section>

    <section id="Anasayfa">
        <div id="metin">
            <h2 >Hoş Geldiniz!</h2>
            <hr width="300" align="left">
            <p>
                Moto İnceleme, motosiklet tutkunları için özel olarak tasarlanmış bir web sitesidir. Burada en yeni motosiklet modellerinin detaylı incelemelerini bulabilir, teknik özellikleri hakkında bilgi edinebilir ve kullanıcı deneyimlerini okuyabilirsiniz. Ayrıca, motosiklet dünyasındaki güncel gelişmeleri ve haberleri takip edebilir, sektördeki yenilikleri yakından izleyebilirsiniz. Moto İnceleme, motosiklet tutkunları için vazgeçilmez bir kaynak olmayı hedeflemektedir. Keyifli okumalar!
            </p>
        </div>
    </section>

    <section id="Hakkımızda">
        <h3>Biz Kimiz?</h3>
        <div class="container">
            <div id="sol">
                <h5 id="sol1">
                   <p> Moto İnceleme,</p>
                    <p>>motosiklet tutkunları için</p>
                    <p>bilgi, deneyim ve tutkularını paylaşabilecekleri bir platformdur.</p>
                </h5>
            </div>
            <div id="sag">
                <span>A</span>
                <p id="psag"> 
                    macımız, motosiklet dünyasının heyecan verici atmosferini, teknolojik gelişmeleri ve efsanevi modelleriyle birlikte, sürücülerin deneyimlerini ve hikayelerini bir araya getirmektir.Moto İnceleme ekibi olarak, her geçen gün büyüyen ve gelişen motosiklet topluluğuna katkıda bulunmayı amaçlıyoruz.Sizler için en yeni modelleri inceleyerek detaylı analizler sunuyor, sektördeki yenilikleri takip ediyor ve deneyimlerinizi diğer tutkunlarla paylaşmanız için bir ortam sağlıyoruz. 
                </p>
            </div>
                <br>
                <br>                
                <img src="./img/motorcycle-husqvarna-wallpaper-preview.jpg" class="img-moto">
                <p id="pson">Motosiklet tutkunları için bir buluşma noktası olmayı hedefleyen Moto İnceleme, her seviyeden sürücüye hitap eden içerikleriyle geniş bir kitleye sesleniyor. Siz de bu heyecanlı dünyanın bir parçası olmak ve motosiklet tutkusunu paylaşmak için bize katılın!</p>
        </div>       
    </section>
    <section id="Haberler">
        <div class="container">
            <h3>Son Dakika Haberler</h3>
            <div class="owl-carousel owl-theme">

                <div class="card item" data-merge=1.5>
                    <img src="./img/MOTOSONDAKİKA.png" alt="" class="img-moto">
                    <div class="haber2">';
                    
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "uyelik"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT * FROM haber ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo  $row["baslik"]. "<br><br>";
echo  $row["icerik"]. "<br>";
}
} else {
echo "Veri bulunamadı";
}

$conn->close();

echo '
</div>
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="./img/MOTOSONDAKİKA.png" alt="" class="img-moto">
                    <div class="haber2">';
                
                    $servername = "localhost";
                    $username = "root"; 
                    $password = ""; 
                    $dbname = "uyelik"; 

                    $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM haber ORDER BY id DESC LIMIT 1, 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo " " . $row["baslik"]. "<br><br>";
                echo "İçerik: " . $row["icerik"]. "<br>";
            }
        } else {
            echo "Veri bulunamadı";
        }

        $conn->close();
echo '
    </div>
                    </div>

                    <div class="card item" data-merge=1.5>
                        <img src="./img/MOTOSONDAKİKA.png" alt="" class="img-moto">
                        <div class="haber2">';
                
                    $servername = "localhost";
                    $username = "root"; 
                    $password = ""; 
                    $dbname = "uyelik";

                    $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM haber ORDER BY id DESC LIMIT 1, 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo " " . $row["baslik"]. "<br><br>";
                echo "İçerik: " . $row["icerik"]. "<br>";
            }
        } else {
            echo "Veri bulunamadı";
        }

        $conn->close();
echo '
    </div>
                    </div>

                    <div class="card item" data-merge=1.5>
                        <img src="./img/MOTOSONDAKİKA.png" alt="" class="img-moto">
                        <div class="haber2">';
                
                    $servername = "localhost";
                    $username = "root"; 
                    $password = ""; 
                    $dbname = "uyelik"; 

                    $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM haber ORDER BY id DESC LIMIT 2, 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        
            while($row = $result->fetch_assoc()) {
                echo " " . $row["baslik"]. "<br><br>";
                echo "İçerik: " . $row["icerik"]. "<br><br>";
            }
        } else {
            echo "Veri bulunamadı";
        }

        $conn->close();
echo '
    </div>
                    </div>

                    <div class="card item" data-merge=1.5>
                        <img src="./img/MOTOSONDAKİKA.png" alt="" class="img-moto">
                        <div class="haber2">';
                
                    $servername = "localhost";
                    $username = "root"; 
                    $password = ""; 
                    $dbname = "uyelik"; 

                    $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
            }

    $sql = "SELECT * FROM haber ORDER BY id DESC LIMIT 3, 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
            echo "" . $row["baslik"]. "<br><br>";
            echo "İçerik: " . $row["icerik"]. "<br>";
        }
    } else {
        echo "Veri bulunamadı";
    }

    $conn->close();
echo '
    </div>

                    </div>
                    </div>

            </div>

        </section>

        <section id="iletişim">
            <div class="container">
                <h3 >İletişim</h3>
                <form action="index.php" method="post">
                <div id="iletişimşefaf">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-kontrol">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-kontrol">
                        </div>

                        <div id="sağform">
                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-kontrol">
                            <input type="text" name="konu" placeholder="Konu Başlığı Girin" required class="form-kontrol">
                        </div>

                        <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesajınız" required class="form-kontrol"></textarea>

                        <input type="submit" value="Gönder">
                    </div>
                    <div id="adres">
                        <h4 class="adres1">Adres:</h4>
                        <p class="adres2">Okmeydanı Mahallesi</p>
                        <p class="adres2">Uluğ sokak</p>
                        <p class="adres2">No:27/2</p>
                        <p class="adres2">0212 211 44 54</p>
                        <p class="adres2">Email: bayirkemal61@gmail.com</p>
                    </div>
                </div></form>
                <footer>
                    <div id="saklı">2024 | Tüm Hakları Saklıdır</div>
                    <div id="socialfooter">
                        <a href="https://www.facebook.com/?stype=lo&deoia=1&jlou=AffBELER0xKlUIZgHoP2tVoGEu4l2esds9qi4nl88w_aNGrLz6gXetyFx6e85jSrcGkliKC1HZ_5eyrBa_1FZulmBPnOigeL3atSwKBrBQ79Pw&smuh=12942&lh=Ac_M0pzxfUaExitDWQw"><i class="fa-brands fa-facebook social"></i></a>
                        <a href="#"><i class="fa-brands fa-google social"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter social"></i></a>
                    </div>
                </footer>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <script src="owl/owl.carousel.min.js"></script>
        <script src="owl/script.js"></script>
    </body>
    </html>';

include("baglanti.php");

    if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
    {
        $adsoyad=$_POST["isim"];
        $telefon=$_POST["tel"];
        $email=$_POST["mail"];
        $konu=$_POST["konu"];
        $mesaj=$_POST["mesaj"];

        $ekle="INSERT INTO iletişim (AdSoyad, Telefon, Email, Konu, Mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

        if($baglan->query($ekle)===TRUE)
        {
            echo "<script>alert('Mesajınız Başarılı ile Gönderilmiştir.')</script>";
        }
        else
        {
            echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu.')</script>";
        }
    }

?>
