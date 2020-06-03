<?php
// Connesione DB
include_once __DIR__ . '/../database.php';
// Functions
include_once __DIR__ . '/../functions/functions.php';
// Ottenere lista stanze
$rooms = getAll($conn, 'stanze');
/*$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);
//var_dump($result);
if ($result && $result->num_rows > 0) {
    $rooms = [];
    while($row = $result->fetch_assoc()) {
        //var_dump($row);
        $rooms[] = $row;
    }
} 
elseif ($result) {
    echo 'No results';
}
else {
    echo 'Query error';
}
// Close DB connection
$conn->close();*/