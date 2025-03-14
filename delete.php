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

writeLog('Delete.php çağrıldı');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    writeLog("Hata: Geçersiz metod - {$_SERVER['REQUEST_METHOD']}");
    http_response_code(405);
    die(json_encode(['error' => 'Method not allowed']));
}

$type = $_POST['type'] ?? '';
$target = $_POST['target'] ?? '';

writeLog("Gelen veriler - Type: $type, Target: $target");

if (!$type || !$target) {
    writeLog("Hata: Eksik parametreler");
    http_response_code(400);
    die(json_encode(['error' => 'Missing parameters']));
}

if (!in_array($type, ['ip', 'url'])) {
    writeLog("Hata: Geçersiz tip - $type");
    http_response_code(400);
    die(json_encode(['error' => 'Invalid type']));
}

$mainFile = $type === 'ip' ? 'blacklist_ips.txt' : 'blacklist_urls.txt';
$detailFile = $type === 'ip' ? 'blacklist_ips_detailed.txt' : 'blacklist_urls_detailed.txt';

try {
    // Ana dosyadan sil
    $mainContent = file_exists($mainFile) ? file_get_contents($mainFile) : '';
    if ($mainContent === false) {
        throw new Exception("Main file could not be read");
    }

    $mainLines = array_filter(explode("\n", $mainContent));
    $mainLines = array_filter($mainLines, function($line) use ($target) {
        return trim($line) !== trim($target);
    });

    if (file_put_contents($mainFile, implode("\n", $mainLines) . "\n") === false) {
        throw new Exception("Main file could not be written");
    }

    // Detay dosyasından sil
    $detailContent = file_exists($detailFile) ? file_get_contents($detailFile) : '';
    if ($detailContent === false) {
        throw new Exception("Detail file could not be read");
    }

    $detailLines = array_filter(explode("\n", $detailContent));
    $detailLines = array_filter($detailLines, function($line) use ($target) {
        $parts = explode('|', $line);
        return trim($parts[0]) !== trim($target);
    });

    if (file_put_contents($detailFile, implode("\n", $detailLines) . "\n") === false) {
        throw new Exception("Detail file could not be written");
    }

    writeLog("Başarılı: $target silindi");
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    writeLog("Exception: " . $e->getMessage());
    http_response_code(500);
    die(json_encode(['error' => 'Exception: ' . $e->getMessage()]));
}
?>