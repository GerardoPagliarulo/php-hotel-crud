<?php
// Connect DB
include_once __DIR__ . '/../database.php';
// Functions
include_once __DIR__ . '/../functions/functions.php';
// GET Room ID
$id_room = $_GET['id'];
// Query Selected Room
$room = getById($conn, 'stanze', $id_room);
/*$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);
//var_dump($result);
if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc(); 
    //var_dump($room);
} 
elseif ($result) {
    echo 'No results';
}
else {
    echo 'Query error';
}
// Close Connection
$conn->close();*/