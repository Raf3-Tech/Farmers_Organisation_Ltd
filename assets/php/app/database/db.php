
<?php

session_start();

require('connect.php');

// Database Operations

function executeQuery($sql, $data) {
    global $conn;
    try {
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            throw new Exception("Error in prepare() function: " . $conn->error);
        }
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        if (!$stmt->bind_param($types, ...$values)) {
            throw new Exception("Error in bind_param() function: " . $stmt->error);
        }
        if (!$stmt->execute()) {
            throw new Exception("Error in execute() function: " . $stmt->error);
        }
        return $stmt;
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
        return false;
    }
}

// CRUD Operations

function create($table, $data) {
    global $conn;
    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if($i === 0){
            $sql .= " $key=?";
        }else{
            $sql .= ", $key=?";
        }
        $i++;
    }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

function update($table, $id, $data) {
    global $conn;
    $sql = "UPDATE $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if($i === 0){
            $sql .= " $key=?";
        }else{
            $sql .= ", $key=?";
        }
        $i++;
    }
    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
}

function delete($table, $id) {
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";
    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}

// Data Retrieval Operations

function selectAll($table, $conditions = []) {
    global $conn;
    $sql = "SELECT * FROM $table";
    if (!empty($conditions)) {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if($i === 0){
                $sql .= " WHERE $key=?";
            }else{
                $sql .= " AND $key=?";
            }
            $i++;
        }
    }
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function selectOne($table, $conditions) {
    global $conn;
    $sql = "SELECT * FROM $table";
    $i = 0;
    foreach ($conditions as $key => $value) {
        if($i === 0){
            $sql .= " WHERE $key=?";
        }else{
            $sql .= " AND $key=?";
        }
        $i++;
    }
    $sql .= " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}

// Additional Operations

function getPublishedPosts() {
    global $conn;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE published=?";
    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function searchPosts($term) {
    $match = '%' . $term . '%';
    global $conn;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE published=? AND (p.title LIKE ? OR p.body LIKE ?)";
    $stmt = executeQuery($sql, ['published' => 1, 'title' => $match, 'body' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

// Helper Functions

function dd($value) {
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}
