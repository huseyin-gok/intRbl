<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="mikrotik.rsc"');

// Başlık ekle
echo "# Mikrotik Firewall Rules for intRbl\n";
echo "# Generated by intRbl System\n";
echo "# Generated at: " . date('Y-m-d H:i:s') . "\n\n";

// Mevcut kuralları temizle
echo "/ip firewall address-list remove [/ip firewall address-list find list=rtbh]\n\n";

// IP listesini oku
$ips = file_exists('blacklist_ips.txt') ? file('blacklist_ips.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];

// Kuralları oluştur
echo "/ip firewall address-list\n";
foreach ($ips as $ip) {
    $ip = trim($ip);
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        echo "add list=rtbh comment=\"intRbl - Auto Generated\" address=$ip\n";
    }
}
?>