<?php
@session_start();

$db = new SQLite3('/www/temp/control4.db') or die('Unable to open database');

$myusername=$_POST['username']; 
$mypassword=$_POST['password'];

$statement = $db->prepare('SELECT count(*) FROM C4users WHERE username=?;');
$statement->bindValue(1, $myusername, SQLITE3_TEXT);
$result = $statement->execute();

$row = $result->fetchArray() ;

$total = $row[0];
echo "Total number of rows " . $total;

if($total > 0){
  $_SESSION['passwrd'] = -1;

}else{
  $statement = $db->prepare("INSERT INTO C4users VALUES (NULL, ?,?, 3);");
  $statement->bindValue(1, $myusername, SQLITE3_TEXT);
  $statement->bindValue(2, $mypassword, SQLITE3_TEXT);
  $result = $statement->execute();
  $_SESSION['passwrd'] = "1";
}

$db->close();
header("location:../index.php");
?>