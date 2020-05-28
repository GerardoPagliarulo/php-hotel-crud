<?php
// Setup DB
include_once __DIR__ . '/../env.php';
// Connection
$conn = new mysqli($server_name, $username, $password, $db_name);
// Connection Check
if ($conn && $conn->connect_error) {
    die('Si è verificato un errore');
}