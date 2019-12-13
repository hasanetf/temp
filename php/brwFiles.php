<?php
    @session_start();
    $dir    = '/mnt/sda1';
    echo '<table id="usbtbl">';

    if(!isset($_SESSION['def_path'])){
        $_SESSION['def_path'] = $dir;
    }

    if(!isset($_SESSION['cur_path'])){
        $_SESSION['cur_path'] = $dir;
    }else{
        $dir =  $_SESSION['cur_path'];
    }

    $files = scandir($dir);

    foreach($files as $value){
        if($value != "."){
            $b = $dir."/".$value;
            $detDir = is_dir($b);
            if($value == ".."){
                $value = "-1";
            }

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
