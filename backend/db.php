<?php

$db = mysqli_connect('localhost','root','','bookmatic')
 or die('Error connecting to MySQL server.');

 function readTable($table_name){
    $query = "SELECT * FROM {$table_name}";
    return mysqli_query($db, $query) or die('Error querying database.');
 }

 function writeToTable($data){

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