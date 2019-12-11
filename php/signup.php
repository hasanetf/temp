<?php
@session_start();

$db = new SQLite3('control4db') or die('Unable to open database');

$query = "CREATE TABLE IF NOT EXISTS C4users (id INTEGER PRIMARY KEY,
username TEXT NOT NULL, 
passwrd TEXT NOT NULL)";

$db->exec($query) or die('Create db failed');

$myusername=$_POST['username']; 
$mypassword=$_POST['password'];
$count = 0;

$query = "SELECT * FROM C4users WHERE username='$myusername' and passwrd='$mypassword'";
$res = $db->exec($query) or die('Select users from db failed');

$check = empty($res);

echo "Is it empty {$check}\n";

if(!empty($res)){
  $count = count($res);
}

if($count > 0){
  echo "User exist";
}else{
  $query = "INSERT INTO users(username, passwrd) VALUES('$myusername', '$mypassword')";
  $db->exec($query) or die('Add user into db failed');
}

$db->close();
?>