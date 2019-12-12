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

$statement = $db->prepare("SELECT count(*) FROM C4users;");
$result = $statement->execute();

if($result < 1){
  $statement = $db->prepare("INSERT INTO C4users VALUES (NULL, ?,?, 0);");
  $statement->bindValue(1, 'admin', SQLITE3_TEXT);
  $statement->bindValue(2, 'admin', SQLITE3_TEXT);
  $result = $statement->execute();
}

$db->close();
?>