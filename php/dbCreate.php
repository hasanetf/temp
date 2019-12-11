<?php
@session_start();

$db = new SQLite3('control4db') or die('Unable to open database');

$query = "CREATE TABLE IF NOT EXISTS C4users (id INTEGER PRIMARY KEY,
username STRING, 
passwrd STRING)";

$db->exec($query) or die('Create db failed');

?>