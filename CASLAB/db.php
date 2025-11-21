<?php
$connection = new mysqli("localhost", "root", "", "crud_db");

if ($connection->connect_error) {
    die("Database Connection Failed: " . $connection->connect_error);
}
?>