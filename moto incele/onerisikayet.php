<?php 

echo '
  <!DOCTYPE html>
  <html>
  <head>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even){
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }

    #customers th, #customers td {
      padding: 15px;
    }

    #customers th {
      background-color: #04AA6D;
      color: white;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
      
    }
  </style>
  </head>
  <body>

  <h1>KULLANICILARDAN GELEN MESAJLAR</h1>';


session_start();

if (empty($_SESSION["user"])) {
  echo "<script>window.location.href='cikis.php'</script>";
} else {
  
  include("baglanti.php");

  $sec = "SELECT * FROM iletişim";
  $sonuc = $baglan->query($sec);

  if ($sonuc->num_rows > 0) {
    echo "<table id='customers'>
            <tr>
              <th>Ad-Soyad</th>
              <th>Telefon</th>
              <th>Email</th>
              <th>Konu</th>
              <th>Mesaj</th>
            </tr>";

    while ($cek = $sonuc->fetch_assoc()) {
      echo "<tr>
              <td>" . $cek['AdSoyad'] . "</td>
              <td>" . $cek['Telefon'] . "</td>
              <td>" . $cek['Email'] . "</td>
              <td>" . $cek['Konu'] . "</td>
              <td>" . $cek['Mesaj'] . "</td>
            </tr>";
    }

    echo "</table>";
  } else
   {
    echo "Veritabanında Kayıtlı Hiçbir Veri Bulunamamıştır.";
   }
}
echo '
  </body>
  </html>';

?>