# Hata Kayıtları

## Genel Hatalar

### Dosya İşlemleri
- `File not found`: Dosya bulunamadı
- `Permission denied`: Dosya izni reddedildi
- `Failed to write file`: Dosyaya yazma başarısız
- `Failed to read file`: Dosya okuma başarısız

### Veri Doğrulama
- `Invalid IP address`: Geçersiz IP adresi
- `Invalid URL format`: Geçersiz URL formatı
- `Missing parameters`: Eksik parametreler
- `Invalid type`: Geçersiz kayıt tipi

### API Hataları
- `Method not allowed`: İzin verilmeyen HTTP metodu
- `Invalid filename`: Geçersiz dosya adı
- `Invalid request`: Geçersiz istek

## Çözüm Önerileri

### Dosya İzinleri
```bash
chmod 755 .
chmod 644 *.html
chmod 644 *.php
chmod 666 *.txt
chmod 666 *.log
```

### Log Kontrolü
```bash
tail -f debug.log
```