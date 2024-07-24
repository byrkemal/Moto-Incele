<?php

echo '
  <!DOCTYPE HTML>
  <html>
  <head>
    <style>
    html {
        height: 100%;
    }
    body {
          height:100%;
          display: flex;
          align-items: center;
          justify-content: center;
          background-image: url(img/panel.jpg);
          background-size: cover;
          background-position: center;
          background-attachment: fixed;
    }
    .baslik a{
        font-size:15px;
        
    }
    .baslik h1 {
        text-align:center;
        font-size: 30px;     
    }
    .baslik button{
        border:3px solid black;
        width: 200px;
        height: 100px;
        font-size:15px;
    }
    </style>
  </head>
  <body>
    <div class="baslik">

      <h1>YÖNETİM PANELİ</h1>

      <a href="haberekle.php"><button >HABER EKLE</button></a>
      <a href="haberguncelle.php"><button >HABER GÜNCELLE</button></a>
      <a href="habersil.php"><button >HABER SİL</button></a>
      <a href="onerisikayet.php"><button >ÖNERİ-ŞİKAYET</button></a>
      <a href="cikis.php"><button>ÇIKIŞ YAP</button></a><br><br>

    </div>
  </body>
  </html>';
  
?>
