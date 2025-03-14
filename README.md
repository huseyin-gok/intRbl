# intRbl - İç RBL Sistemi

[English](README.en.md) | [Türkçe](README.md)

İç RBL (Realtime Blacklist) Sistemi, şirket içi IP ve URL engelleme sistemi için geliştirilmiş web tabanlı bir yönetim aracıdır.

## Özellikler

- IP Engelleme Yönetimi
  - IP adresi ekleme/silme
  - Toplu IP adresi ekleme
  - IP detaylarını görüntüleme
  - MXToolbox entegrasyonu

- URL Engelleme Yönetimi
  - URL ekleme/silme
  - Toplu URL ekleme
  - URL detaylarını görüntüleme
  - URL doğrulama

- Raporlama
  - Tarih bazlı filtreleme
  - IP/URL bazlı filtreleme
  - Aktivite grafiği
  - Excel'e aktarma
  - İstatistiksel özet

## Kurulum

1. Dosyaları web sunucunuza yükleyin
2. Gerekli izinleri ayarlayın:
   ```bash
   chmod 755 .
   chmod 644 *.html
   chmod 644 *.php
   chmod 666 *.txt
   chmod 666 *.log
   ```

## Gereksinimler

- PHP 7.4 veya üzeri
- Web sunucusu (Apache/Nginx)
- JavaScript desteği olan modern bir tarayıcı

## Kullanılan Teknolojiler

- Bootstrap 5.3.0
- jQuery 3.6.0
- Chart.js
- Moment.js
- DataTables
- XLSX.js

## Güvenlik

- XSS koruması
- CSRF koruması
- Dosya yolu doğrulama
- Hata ayıklama ve loglama

## Dosya Yapısı

### Veri Dosyaları
- `blacklist_ips.txt`: Engellenen IP adresleri listesi
- `blacklist_ips_detailed.txt`: Engellenen IP'lerin detaylı bilgileri
- `blacklist_urls.txt`: Engellenen URL'ler listesi
- `blacklist_urls_detailed.txt`: Engellenen URL'lerin detaylı bilgileri

### Log Dosyaları
- `debug.log`: Sistem logları ve hata takibi

### Dokümantasyon
- `README.md`: Türkçe dokümantasyon
- `README.en.md`: İngilizce dokümantasyon
- `database.md`: Veritabanı yapısı
- `Hatalar.md`: Hata kayıtları ve çözümleri

## Lisans

MIT License