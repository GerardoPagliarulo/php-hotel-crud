<?php
// Connect DB
include_once __DIR__ . '/../database.php';
// GET Room 
if (!empty($_GET['id'])) {
    $id_room = $_GET['id'];
    // Query
    $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc();
    }
    else {
        die('ID non esistente');
    }
}
else {
    die('Errore ottenimento stanza');
}
// Close Connection
$conn->close();