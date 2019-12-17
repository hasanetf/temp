<?php
print "date,close\n";
$db = new SQLite3('/www/temp/control4.db') or die('Unable to open database');
$statement = $db->prepare('SELECT * FROM temp ORDER BY id LIMIT 20;');
$result = $statement->execute();

while ($row = $result->fetchArray()) {
    $subtime = explode(' ',  $row['t']);
    print $subtime[1].",".($row['v']/1000)."\n";
}
$db->close();
?>
