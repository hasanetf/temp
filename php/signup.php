<?php
@session_start();

$db = new SQLite3('/www/temp/control4.db') or die('Unable to open database');

$myusername=$_POST['username']; 
$mypassword=$_POST['password'];
$count = 0;

$statement = $db->prepare('SELECT * FROM C4users WHERE username=:id1;');
$statement->bindValue(':id1', $myusername);
$result = $statement->execute();

$count = count($result);

if($count > 0){
  $db->close();
  header("location:../index.php?usr=1");
}else{
  $statement = $db->prepare("INSERT INTO C4users VALUES (NULL, 'id1','id2', 3);");
  $statement->bindValue(':id1', $myusername);
  $statement->bindValue(':id2', $mypassword);
  $result = $statement->execute();
}

$db->close();
header("location:../index.php?usr=0");
?>