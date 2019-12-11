<?php
@session_start();

$db = new SQLite3('control4db') or die('Unable to open database');
$query = "SELECT * FROM C4users";
$res = $db->exec($query) or die('Select from users db failed');

while ($row = $res->fetchArray()){
  echo "{$row['username']}\nPasswd: {$row['passwrd']}\n";
}

$db->close();
?>