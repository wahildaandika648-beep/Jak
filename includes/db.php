<?php
$app = require __DIR__ . '/../config/app.php';
date_default_timezone_set($app['TIMEZONE']);
$dbConfig = require __DIR__ . '/../config/database.php';

try {
    $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s', $dbConfig['host'], $dbConfig['port'], $dbConfig['database'], $dbConfig['charset']);
    $pdo = new PDO($dsn, $dbConfig['username'], $dbConfig['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (Throwable $e) {
    error_log($e->getMessage() . PHP_EOL, 3, __DIR__ . '/../storage/logs/app.log');
    http_response_code(500);
    exit('Terjadi gangguan sistem.');
}
