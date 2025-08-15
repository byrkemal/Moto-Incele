# 🏍️ Moto İncele - Motosiklet İnceleme Platformu

[![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)

> Motosiklet tutkunları için özel olarak tasarlanmış, dinamik içerik yönetimi olan modern web platformu.

## 📋 İçindekiler

- [Proje Hakkında](#-proje-hakkında)
- [Özellikler](#-özellikler)
- [Ekran Görüntüleri](#-ekran-görüntüleri)
- [Teknolojiler](#-teknolojiler)
- [Kurulum](#-kurulum)
- [Kullanım](#-kullanım)
- [Proje Yapısı](#-proje-yapısı)
- [Katkıda Bulunma](#-katkıda-bulunma)
- [İletişim](#-iletişim)

## 🎯 Proje Hakkında

**Moto İncele**, motosiklet tutkunları için geliştirilmiş kapsamlı bir web platformudur. Site, en yeni motosiklet modellerinin detaylı incelemelerini, teknik özelliklerini ve kullanıcı deneyimlerini sunar. Ayrıca motosiklet dünyasındaki güncel gelişmeleri ve haberleri takip etmenizi sağlar.

### 🌟 Ana Özellikler

- **Dinamik İçerik Yönetimi**: Admin paneli ile haber ekleme, güncelleme ve silme
- **Motosiklet İncelemeleri**: Detaylı model analizleri ve teknik özellikler
- **Kullanıcı Sistemi**: Kayıt olma ve giriş yapma özellikleri
- **Responsive Tasarım**: Tüm cihazlarda mükemmel görünüm
- **Modern UI/UX**: Kullanıcı dostu arayüz tasarımı

## ✨ Özellikler

### 🏠 Ana Sayfa
- Hoş geldin mesajı ve site tanıtımı
- Hakkımızda bölümü
- Son dakika haberleri (Owl Carousel ile)
- Smooth scroll navigasyon

### 🏍️ Motosiklet Sayfaları
- **BMW S1000RR** detaylı inceleme
- **Ducati Monster 1200** analizi
- **Yamaha MT-07** özellikleri
- Her model için teknik detaylar ve görseller

### 👤 Kullanıcı Sistemi
- Kayıt olma formu
- Giriş yapma sistemi
- Güvenli oturum yönetimi

### 🔧 Admin Paneli
- Haber ekleme/düzenleme/silme
- Öneri ve şikayet yönetimi
- İçerik kontrolü

## 📸 Ekran Görüntüleri

<div align="center">
  <img src="Moto İncele/Ekran görüntüsü 2024-07-24 141649.png" alt="Motosikletler" width="300"/>
  <img src="Moto İncele/Ekran görüntüsü 2024-07-24 141607.png" alt="Ana Sayfa" width="300"/>
  <img src="Moto İncele/Ekran görüntüsü 2024-07-24 141708.png" alt="Giriş" width="300"/>
  <img src="Moto İncele/Ekran görüntüsü 2024-07-24 141748.png" alt="Admin Panel" width="300"/>
</div>

## 🛠️ Teknolojiler

### Backend
- **PHP 8.0+** - Sunucu tarafı programlama
- **MySQL** - Veritabanı yönetimi
- **Apache/Nginx** - Web sunucusu

### Frontend
- **HTML5** - Semantik markup
- **CSS3** - Stil ve animasyonlar
- **JavaScript** - İnteraktif özellikler
- **Font Awesome** - İkonlar
- **Google Fonts** - Tipografi
- **Owl Carousel** - Slider bileşeni

### Veritabanı
- **uyelik** veritabanı
- Kullanıcı yönetimi
- Haber içerik yönetimi

## 🚀 Kurulum

### Gereksinimler
- PHP 8.0 veya üzeri
- MySQL 5.7 veya üzeri
- Apache/Nginx web sunucusu
- Composer (opsiyonel)

### Adım Adım Kurulum

1. **Projeyi klonlayın**
   ```bash
   git clone https://github.com/your-username/moto-incele.git
   cd moto-incele
   ```

2. **Veritabanını kurun**
   ```sql
   CREATE DATABASE uyelik;
   USE uyelik;
   ```

3. **Veritabanı bağlantısını yapılandırın**
   - `baglanti.php` ve `baglanti2.php` dosyalarını düzenleyin
   - Veritabanı bilgilerinizi girin

4. **Web sunucusunu yapılandırın**
   ```bash
   # Apache için .htaccess dosyası oluşturun
   # Nginx için server block yapılandırın
   ```

5. **Dosya izinlerini ayarlayın**
   ```bash
   chmod 755 moto\ incele/
   chmod 644 moto\ incele/*.php
   ```

6. **Tarayıcıda açın**
   ```
   http://localhost/moto-incele/
   ```

## 📖 Kullanım

### Kullanıcılar İçin
1. Ana sayfada motosiklet haberlerini okuyun
2. "Motosiklet" bölümünden model incelemelerini görüntüleyin
3. Kayıt olun ve giriş yapın
4. Öneri ve şikayetlerinizi paylaşın

### Adminler İçin
1. Admin paneline giriş yapın
2. Haber ekleyin, düzenleyin veya silin
3. Kullanıcı öneri ve şikayetlerini yönetin
4. İçerik kalitesini kontrol edin

## 📁 Proje Yapısı

```
moto-incele/
├── 📄 index.php              # Ana sayfa
├── 📄 motorlar.php           # Motosiklet listesi
├── 📄 yamahamt07.php         # Yamaha MT-07 inceleme
├── 📄 bmws1000rr.php         # BMW S1000RR inceleme
├── 📄 ducatimonster1200.php  # Ducati Monster 1200 inceleme
├── 📄 kayit.php              # Kayıt sayfası
├── 📄 giris.php              # Giriş sayfası
├── 📄 panel.php              # Admin paneli
├── 📄 haberekle.php          # Haber ekleme
├── 📄 haberguncelle.php      # Haber güncelleme
├── 📄 habersil.php           # Haber silme
├── 📄 onerisikayet.php       # Öneri/şikayet yönetimi
├── 📄 baglanti.php           # Veritabanı bağlantısı
├── 📄 baglanti2.php          # İkincil veritabanı bağlantısı
├── 📄 cikis.php              # Çıkış işlemi
├── 🎨 style.css              # Ana stil dosyası
├── 🎨 motorlar.css           # Motosiklet sayfası stilleri
├── 🎨 motoözellik.css        # Özellik sayfası stilleri
├── 🎨 stylegiriş.css         # Giriş sayfası stilleri
├── 🎨 stylekayit.css         # Kayıt sayfası stilleri
├── 📁 img/                   # Görseller
│   ├── 🖼️ background.jpg
│   ├── 🖼️ bmws1000rr.jpg
│   ├── 🖼️ MT-07.jpg
│   └── ... (diğer görseller)
└── 📁 owl/                   # Owl Carousel dosyaları
    ├── 📄 owl.carousel.js
    ├── 📄 owl.carousel.min.css
    └── 📄 owl.theme.default.min.css

```

### Katkı Alanları
- 🐛 Bug düzeltmeleri
- ✨ Yeni özellikler
- 📱 Responsive tasarım iyileştirmeleri
- 🔒 Güvenlik güncellemeleri
- 📝 Dokümantasyon

## 📞 İletişim

**Geliştirici:** Kemal Bayır  
**E-posta:** bayirkemal61@gmail.com  
**GitHub:** https://github.com/byrkemal


## 🙏 Teşekkürler

- [Font Awesome](https://fontawesome.com/) - İkonlar için
- [Google Fonts](https://fonts.google.com/) - Tipografi için
- [Owl Carousel](https://owlcarousel2.github.io/OwlCarousel2/) - Slider bileşeni için
- Tüm açık kaynak topluluğuna

---

<div align="center">
  <p>⭐ Bu projeyi beğendiyseniz yıldız vermeyi unutmayın!</p>
  <p>🏍️ Motosiklet tutkusu ile kodlanmıştır ❤️</p>
</div>
