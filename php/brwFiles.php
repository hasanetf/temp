<?php
    @session_start();
    $dir    = '/mnt/sda1';
    echo '<table id="usbtbl">';

    if(!isset($_SESSION['dir_path'])){
        $_SESSION['dir_path'] = $dir;
    }else{
        $dir =  $_SESSION['dir_path'];
    }

    $files = scandir($dir);

    foreach($files as $value){
        if($value != "."){
            $b = $dir."/".$value;
            $detDir = is_dir($b);
            echo "<tr>";
            if($detDir){
                echo '<a href="updatePath.php?dir='.$value.'">';
            }
            echo "<td>";
            if($detDir){
                echo '<a href="updatePath.php?dir='.$value.'">';
                echo $value."</a></td>";
            }else{
                echo $value."</td>";
            }
            echo "</tr>";
        }  
    }
    echo "</table>";

?>
