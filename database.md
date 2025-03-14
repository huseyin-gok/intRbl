# Veritabanı Yapısı

## Dosya Yapısı

### blacklist_ips.txt
- IP adresleri listesi
- Her satırda bir IP adresi
- Format: `IP`

### blacklist_ips_detailed.txt
- IP adresleri detaylı bilgileri
- Her satırda bir kayıt
- Format: `IP|SEBEP|TARİH|URL`

### blacklist_urls.txt
- URL listesi
- Her satırda bir URL
- Format: `URL`

### blacklist_urls_detailed.txt
- URL detaylı bilgileri
- Her satırda bir kayıt
- Format: `URL|SEBEP|TARİH`

## Tarih Formatı
- Format: `DD/MM/YYYY-HH:mm`
- Örnek: `15/03/2025-14:30`

## Log Dosyası
### debug.log
- Sistem logları
- Format: `[TARIH] MESAJ`