<?php
@session_start();

$db = new SQLite3('control4.db') or die('Unable to open database');
$query = "DROP TABLE C4users;";

$db->exec($query) or die('Delete table from db failed');

$db->close();
header("location:../index.php");
?>