<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');

function writeLog($message) {
    $logFile = 'debug.log';
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

writeLog('Save.php çağrıldı');

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

writeLog("Gelen veriler - Filename: {$data['filename']}, Content: {$data['content']}\n");

if (!isset($data['filename']) || !isset($data['content'])) {
    writeLog("Hata: Eksik parametreler");
    http_response_code(400);
    die(json_encode(['error' => 'Missing parameters']));
}

$allowedFiles = ['blacklist_ips.txt', 'blacklist_ips_detailed.txt', 'blacklist_urls.txt', 'blacklist_urls_detailed.txt'];
if (!in_array($data['filename'], $allowedFiles)) {
    writeLog("Hata: Geçersiz dosya adı - {$data['filename']}");
    http_response_code(403);
    die(json_encode(['error' => 'Invalid filename']));
}

$filePath = __DIR__ . DIRECTORY_SEPARATOR . $data['filename'];

try {
    if (file_put_contents($filePath, $data['content'] . "\n", FILE_APPEND) === false) {
        writeLog("Hata: Dosyaya yazılamadı - $filePath");
        http_response_code(500);
        die(json_encode(['error' => 'Failed to write file']));
    }

    writeLog("Başarılı: Veri kaydedildi - {$data['filename']}");
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    writeLog("Exception: " . $e->getMessage());
    http_response_code(500);
    die(json_encode(['error' => 'Exception: ' . $e->getMessage()]));
}
?>