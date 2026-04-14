<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$type = isset($_GET['type']) ? strtolower(trim((string) $_GET['type'])) : '';
$center = isset($_GET['center']) ? trim((string) $_GET['center']) : '';

if (!in_array($type, ['call', 'booking'], true)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid lead type']);
    exit;
}

if ($center === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Center is required']);
    exit;
}

$rawBody = file_get_contents('php://input');
if ($rawBody === false || trim($rawBody) === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Request body is required']);
    exit;
}

$backendUrl = 'https://cc-crm-backend-production.up.railway.app/api/leads?' . http_build_query([
    'type' => $type,
    'center' => $center,
], '', '&', PHP_QUERY_RFC3986);

$responseBody = '';
$statusCode = 502;

if (function_exists('curl_init')) {
    $ch = curl_init($backendUrl);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json',
        ],
        CURLOPT_POSTFIELDS => $rawBody,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_CONNECTTIMEOUT => 10,
    ]);

    $result = curl_exec($ch);
    if ($result === false) {
        $statusCode = 502;
        $responseBody = json_encode(['error' => 'Lead gateway request failed']);
    } else {
        $statusCode = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        $responseBody = $result;
    }
    curl_close($ch);
} else {
    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/json\r\nAccept: application/json\r\n",
            'content' => $rawBody,
            'timeout' => 20,
            'ignore_errors' => true,
        ],
    ]);

    $result = @file_get_contents($backendUrl, false, $context);
    if ($result === false) {
        $statusCode = 502;
        $responseBody = json_encode(['error' => 'Lead gateway request failed']);
    } else {
        $responseBody = $result;
        if (isset($http_response_header[0]) && preg_match('/\s(\d{3})\s/', $http_response_header[0], $matches)) {
            $statusCode = (int) $matches[1];
        }
    }
}

if ($statusCode < 100) {
    $statusCode = 502;
}

http_response_code($statusCode);
echo $responseBody;
