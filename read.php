<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json');

function writeLog($message) {
    $logFile = 'debug.log';
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

writeLog('Read.php çağrıldı');

$filename = $_GET['file'] ?? '';
writeLog("İstenen dosya: $filename");

$allowedFiles = ['blacklist_ips.txt', 'blacklist_ips_detailed.txt', 'blacklist_urls.txt', 'blacklist_urls_detailed.txt'];
if (!in_array($filename, $allowedFiles)) {
    writeLog("Hata: Geçersiz dosya adı - $filename");
    http_response_code(403);
    die(json_encode(['error' => 'Invalid filename']));
}

$filePath = __DIR__ . DIRECTORY_SEPARATOR . $filename;
writeLog("Dosya yolu: $filePath");

if (!file_exists($filePath)) {
    writeLog("Bilgi: Dosya henüz oluşturulmamış - $filePath");
    echo json_encode([]);
    exit;
}

try {
    if (!is_readable($filePath)) {
        writeLog("Hata: Dosya okunamıyor - $filePath");
        http_response_code(500);
        die(json_encode(['error' => 'File is not readable']));
    }

    $content = file_get_contents($filePath);
    if ($content === false) {
        writeLog("Hata: Dosya okunamadı - $filePath");
        http_response_code(500);
        die(json_encode(['error' => 'Failed to read file']));
    }

    $lines = array_filter(explode("\n", $content));
    writeLog("Başarılı: " . count($lines) . " satır okundu - $filename");
    
    echo json_encode(array_values($lines));
} catch (Exception $e) {
    writeLog("Exception: " . $e->getMessage());
    http_response_code(500);
    die(json_encode(['error' => 'Exception: ' . $e->getMessage()]));
}
?>