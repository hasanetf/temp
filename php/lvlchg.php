<?php
@session_start();

$db = new SQLite3('/www/temp/control4.db') or die('Unable to open database');

echo "TEST".$_GET['lvl'].$_GET['id'];

#echo "Total number of rows " . $total;
if($_SESSION['lvl']==0){
    if(isset($_GET['lvl']) && isset($_GET['id'])){

        $statement = $db->prepare('SELECT * FROM C4users WHERE id=?;');
        $statement->bindValue(1, $_GET['id'], SQLITE3_INTEGER);
        $result = $statement->execute();
        $row = $result->fetchArray();

        if($_GET['lvl'] == "1"){
            if($row['lvl'] > 0){
                $statement = $db->prepare('UPDATE C4users SET lvl=? WHERE id=?;');
                $statement->bindValue(1, $row['lvl'] - 1, SQLITE3_INTEGER);
                $statement->bindValue(2, $_GET['id'], SQLITE3_INTEGER);
                $result = $statement->execute();
            }

        }elseif($_GET['lvl'] == "2"){
            if($row['lvl'] < 3){
                $statement = $db->prepare('UPDATE C4users SET lvl=? WHERE id=?;');
                $statement->bindValue(1, $row['lvl'] + 1, SQLITE3_INTEGER);
                $statement->bindValue(2, $_GET['id'], SQLITE3_INTEGER);
                $result = $statement->execute();
            }
        }
    }
}

#header("location:usrManage.php?dbRead=1");
?>