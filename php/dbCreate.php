<?php
@session_start();

$db = new SQLite3('control4db') or die('Unable to open database');

$query = "CREATE TABLE IF NOT EXISTS users (username STRING PRIMARY KEY, password STRING)";

$db->exec($query) or die('Create db failed');

?>