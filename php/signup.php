<?php
@session_start();

$db = new SQLite3('/www/temp/control4.db') or die('Unable to open database');

$myusername=$_POST['username']; 
$mypassword=$_POST['password'];
$count = 0;
echo "Values are $myusername, $mypassword";

$query = "SELECT * FROM C4users WHERE username='$myusername' and passwrd='$mypassword'";
echo "QUERY 1 $query";
$res = $db->exec($query) or die('Select users from db failed');

$query = "INSERT INTO C4users VALUES (NULL, '$myusername', '$mypassword')";
echo "QUERY 2 $query";
$db->exec($query) or die('Add user into db failed');


$db->close();
#header("location:../index.php");
?>