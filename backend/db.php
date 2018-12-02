<?php

$db = mysqli_connect('localhost','root','','bookmatic')
 or die('Error connecting to MySQL server.');

 function readTable($table_name){
    $query = "SELECT * FROM {$table_name}";
    return mysqli_query($db, $query) or die('Error querying database.');
 }

 function writeToTable($data, $table){
    $query = "INSERT INTO {$table} (isbn, name, description, year_published, genre, author, publisher) VALUES ({$data});";
    return mysqli_query($db, $query) or die('Error querying database.');
 }

function getTableData($table){
    if($table == "books" ){
        return readTable($table);
    } else {
        return FALSE;
    }
}

function saveData($array){

}

?>