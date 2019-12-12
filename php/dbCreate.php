<?php
@session_start();

$db = new SQLite3('/www/temp/control4.db') or die('Unable to open database');

$query = "CREATE TABLE IF NOT EXISTS C4users (
  id INTEGER PRIMARY KEY, 
  username TEXT NOT NULL, 
  passwrd TEXT NOT NULL,
  lvl INTEGER NOT NULL
  )";

$db->exec($query) or die('Create db failed');


$db->close();
?>