<?php
// Remove header here - it should only be in API endpoints
// header('Content-Type: application/json');

$host = '172.29.10.98';
$port = '5432';
$dbname = 'referral';
$user = 'postgres';
$password = 'BPK9@support';

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET client_encoding TO 'UTF8'");
} catch(PDOException $e) {
    error_log('Connection failed: ' . $e->getMessage());
    // Don't expose database credentials in the error message
    throw new Exception('Database connection failed');
}
?>
