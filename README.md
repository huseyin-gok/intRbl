# intRbl - İç RBL Sistemi

[English](README.en.md) | [Türkçe](README.md)

Bu sistem, zararlı IP adresleri ve URL'leri gerçek zamanlı olarak takip etmek ve engellemek için geliştirilmiş bir web uygulamasıdır. Sistem, güvenlik duvarı (firewall) entegrasyonu için otomatik olarak güncel blacklist dosyaları oluşturur ve yönetir.

Ana Özellikler:

## Özellikler

- IP Engelleme Yönetimi
  - IP adresi ekleme/silme
  - Toplu IP adresi ekleme
  - IP detaylarını görüntüleme
  - IP adresi ve URL engelleme sistemi
  - Gerçek zamanlı istatistikler ve grafikler
  - Toplu silme ve yönetim özellikleri
  - MXToolbox butonu ile IP kontrol
  - Türkçe arayüz ve kullanıcı dostu tasarım

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

1. Dosyaları web php destekli bir sunucuya yükleyin. 
2. Gerekli izinleri ayarlayın: .txt ve klasörleri yazma izni sağlayın.

## Gereksinimler

- PHP 7.4 veya üzeri
- Database Gerek Yoktur.
- Web sunucusu (Apache/Nginx)

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
### Resimler
![Image](https://github.com/user-attachments/assets/51066d5e-3a2c-4e37-8c0f-4f60b9132ca5)

![Image](https://github.com/user-attachments/assets/e831a2b2-844a-45df-9e61-38986c6ebc52)
