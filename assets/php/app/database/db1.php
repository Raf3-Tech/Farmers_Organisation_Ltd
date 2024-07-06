<?php

session_start();

require('connect.php');

// Print function

function dd($value)
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

// $data = [
//     'username' => 'zezeez',
//     'admin' => 1,
//     'email' => 'zezezez@rafe.com',
//     'password' => 'raf3'
// ];



// Query execution function

// function executeQuery($sql, $data)
// {
//     global $conn;
//     $stmt = $conn->prepare($sql);
//     $values = array_values($data);
//     $types = str_repeat('s', count($values));
//     $stmt->bind_param($types, ...$values);
//     $stmt->execute();
//     return $stmt;
// }

function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        // Handle prepare() error
        echo "Error in prepare() function: " . $conn->error;
        return false;
    }
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    if (!$stmt->bind_param($types, ...$values)) {
        // Handle bind_param() error
        echo "Error in bind_param() function: " . $stmt->error;
        return false;
    }
    if (!$stmt->execute()) {
        // Handle execute() error
        echo "Error in execute() function: " . $stmt->error;
        return false;
    }
    return $stmt;
}


// Create function

function create($table, $data){
    global $conn;
    //$sql = "INSERT INTO users SET username = ?, admin=?, email=?, password=?"

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

// Select all function

function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {

        // $sql = "SELECT * FROM $table"

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;

    }else{
        
        //$sql = "SELECT * FROM $table WHERE username='mike' AND admin='1'"

        $i = 0;
        foreach ($conditions as $key => $value) {
            if($i === 0){
                $sql .= " WHERE $key=?";
            }else{
                $sql .= " AND $key=?";
            }
            $i++;
        }

        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
 
}

// $conditions = [
//     'admin' => 1,
//     'username' => 'rafe'
// ];


// $users = selectOne('users', $conditions);
// dd($users);

// Select one function

function selectOne($table, $conditions)
{
    global $conn;
    $sql = "SELECT * FROM $table";
           
        //$sql = "SELECT * FROM $table WHERE username='mike' AND admin='1' LIMIT 1"

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

// Update function
function update($table, $id, $data){
    global $conn;
    //$sql = "UPDATE users SET username = ?, admin=?, email=?, password=? WHERE id=?"

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
    $id = $stmt->insert_id;
    return $stmt->affected_rows;

}

// Delete function
function delete($table, $id){
    global $conn;
    //$sql = "DELETE FROM users WHERE id=?"

    $sql = "DELETE FROM $table WHERE id=?";
    
    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;

}


// $id = delete('users', 40);
// dd($id);

function getPublishedPosts(){
    global $conn;

    //SELECT * FROM posts WHERE published=1

    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE published=?";

    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function searchPosts($term){
    $match = '%' . $term . '%';
    global $conn;

    //SELECT * FROM posts WHERE published=1

    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE published=? AND p.title LIKE ? OR p.body LIKE ?";

    $stmt = executeQuery($sql, ['published' => 1, 'title' => $match, 'body' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}