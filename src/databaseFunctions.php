<?php
    include_once("../config/database.php");

    function db_connect()
{
    try {
        $dbString = "mysql:host=".DB_HOST.";dbname=".DB_NAME;

        $db = new PDO($dbString, DB_USER, DB_PASSWORD);
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
      } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
      }
}

function db_getData($query)
{
    // connect to database and execute query
    $DB = db_connect();
    $result = $DB->query($query);
    $DB = null;
    return $result;
} 

function db_insertData($query)
{
    $db = db_connect();
    $result = $db->prepare($query);
    $result->execute();
    if ($result)
    {
        // Return row id for success
        return $db->lastInsertId();
    }
    else
    {
        $result = null;
        $result = "Query insert Error: " . $query . "<br>" . implode(" | ",$db->errorInfo());
    }
    $db = null;
    return $result;
}
?>