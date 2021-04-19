<?php
// ===============================================/
// Query all records 
// ===============================================/
function query_all_records($table)
{
    global $dbConnection;
    $query = "SELECT * FROM $table";
    //! Security warning: SQL Injection
    $result_set = mysqli_query($dbConnection, $query);
    db_confirm_result_set($result_set, $query);
    return $result_set;
}


// ===============================================/
// Query all records where condition
// ! Currently available for 1 condition
// ===============================================/
function query_all_records_where_condition($table, $condition)
{
    global $dbConnection;
    $query  = "SELECT * FROM $table WHERE ";
    foreach ($condition as $key => $value) {
        $query .= "$key='" . $value . "'";
    }

    //! Security warning: SQL Injection
    $result_set = mysqli_query($dbConnection, $query);
    db_confirm_result_set($result_set, $query);
    return $result_set;
}


// ===============================================/
// Query all records where condition
// ! Currently available for 1 condition
// ===============================================/
function query_random_records($table, $limit)
{
    global $dbConnection;
    $query  = "SELECT * FROM $table ORDER BY RAND() ";
    $query .= "LIMIT $limit";

    //! Security warning: SQL Injection
    $result_set = mysqli_query($dbConnection, $query);
    db_confirm_result_set($result_set, $query);
    return $result_set;
}


// ===============================================/
// Query all records where condition
// ! Currently available for 1 condition
// ===============================================/
function insert_random_records($table, $props)
{
    global $dbConnection;

    $queryKeys   = "INSERT INTO $table (";
    $queryValues = "VALUES (";
    foreach ($props as $key => $value) {
        $queryKeys   .= $key . ",";
        $queryValues .= $value . ",";
    }
}