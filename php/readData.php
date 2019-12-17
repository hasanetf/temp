<?php
print "date,close\n";
$db = new SQLite3('/www/temp/control4.db') or die('Unable to open database');
$statement = $db->prepare('SELECT * FROM temp ORDER BY id LIMIT 20;');
$result = $statement->execute();

while ($row = $result->fetchArray()) {
print $row['t'].",".$row['v']."\n";
}
$db->close();
?>