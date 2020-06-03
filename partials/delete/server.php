<?php
// Connect DB
include_once __DIR__ . '/../database.php';
// Functions
include_once __DIR__ . '/../functions/functions.php';
// Room ID
if (empty($_POST['id'])) {
    die('ID errato');
}
$id_room = $_POST['id'];
$url = "$base_path?del=room";
// Query Delete
deleteById($conn, 'stanze', $id_room, $url);
/*$sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);
var_dump($result);
if ($result && $conn->affected_rows > 0) {
    header("Location: $base_path?del=1");
}
elseif ($result) {
    echo 'Nessuna stanza trovata';
}
else {
    echo 'Errore cancellazione record';
}
// Close DB connection
$conn->close();*/
