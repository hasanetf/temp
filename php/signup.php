<?php
@session_start();

$db = new SQLite3('control4db') or die('Unable to open database');

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

echo "Is it empty $res  {$count}\n";

if($count > 0){
  echo "User exists";
}else{
  $query = "INSERT INTO users(username, passwrd) VALUES('$myusername', '$mypassword')";
  $db->exec($query) or die('Add user into db failed');
}

$db->close();
?>