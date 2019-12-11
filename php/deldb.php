<?php
@session_start();

$db = new SQLite3('control4db') or die('Unable to open database');
$query = "DROP TABLE users;";

$db->exec($query) or die('Delete table from db failed');

$db->close();
?>