<?php
include 'core.php';
$db = new mysqli('127.0.0.1','bookmaticusr','bookmaticpwd','bookmaticdb');

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //bootstrapBootmatic();
}

function readTable($table_name){
    $sql = "SELECT * FROM {$table_name}";
    return $db->query($sql);  
}

function writeRowToTable($data, $table){
    $sql = "INSERT INTO {$table} (isbn, name, description, year_published, genre, author, publisher) VALUES ({$data});";
    return $db->query($sql);
}

function getTableData($table){
    if($table == "books" ){
        return readTable($table);
    } else {
        return FALSE;
    }
}

function saveRowData($array, $table){
    if(gettype($array[0]) == "int"){
        writeRowToTable($array, $table);
        return $id->$array[0];
    }
}

?>