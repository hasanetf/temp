<?php
@session_start();

$db = new SQLite3('control4db') or die('Unable to open database');

$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

$query = "SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
$res = $db->exec($query) or die('Select users from db failed');

$count = sqlite_num_rows($res);

if($count > 0){
  echo "User exist";
}else{
  $query = "INSERT INTO users(username, password) VALUES('$myusername', '$mypassword')";
  $db->exec($query) or die('Add user into db failed');
}

?>