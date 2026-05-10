<?php

$dbHost = getenv('DB_HOST') ?: 'localhost';
$dbUser = getenv('DB_USER') ?: 'root';
$dbPass = getenv('DB_PASS') ?: '';
$dbName = getenv('DB_NAME') ?: 'tictactoe';

function db_connect() {
    global $dbHost, $dbUser, $dbPass, $dbName;

    if (!function_exists('mysqli_connect')) {
        die('MySQLi extension is not enabled on this server.');
    }

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die('Database connection failed: ' . mysqli_connect_error());
    }

    mysqli_set_charset($conn, 'utf8mb4');

    return $conn;
}
?>
