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
            echo "<tr>";

            if(is_dir($dir."/".$value)){
                echo '<a href="updatePath.php?dir='.$value.'">';
            }

            echo "<td>".$value."</td>";

            if(is_dir($dir."/".$value)){
                echo '</a>';
            }
            echo "</tr>";
        }  
    }
    echo "</table>";

?>
