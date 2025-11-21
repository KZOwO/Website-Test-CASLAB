<?php
include "db.php";

$id = $_GET['id'];

$connection->query("DELETE FROM listTP WHERE id=$id");

header("Location: index.php");
exit;
?>