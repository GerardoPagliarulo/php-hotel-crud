<?php
/****************
    FUNCTIONS
*****************/
// HOME FUNCTION: get all records
function getAll($conn, $table) {
    $sql = "SELECT * FROM `$table`";
    $result = $conn->query($sql);
    //var_dump($result);
    if ($result && $result->num_rows > 0) {
        $records = [];
        while($row = $result->fetch_assoc()) {
            $records[] = $row;
        }
    } 
    elseif ($result) {
        $records = [];
    }
    else {
        $records = false;
    }
    // Close DB connection
    $conn->close();
    return $records;
}
// SHOW FUNCTION: get record by ID
function getById($conn, $table, $id) {
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $record = $result->fetch_assoc(); 
    } 
    elseif ($result) {
        $record = [];
    }
    else {
        $record = false;
    }
    // Close Connection
    $conn->close();
    return $record;
}
// DELETE FUNCTIONS: delete record by ID
function deleteById($conn, $table, $id, $url) {
    $sql = "DELETE FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);
    var_dump($result);
    if ($result && $conn->affected_rows > 0) {
        header("Location: $url");
    }
    elseif ($result) {
        die('Nessuna stanza trovata');
    }
    else {
        die('Errore cancellazione record');
    }
    // Close DB connection
    $conn->close();
}