<?php
    @session_start();
    $dir    = '/mnt/sda1';
    echo '<table id="usbtbl">';

    if(!isset( $_SESSION['def_path'])){
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
                $valueA = "-1";
            }else{
                $valueA = $value; 
            }

            echo "<tr><td>";
            if($detDir){
                echo '<img src="../folder.jpeg"  width="50" height="50" />';
                echo "</td><td>";

                echo '<a href="updatePath.php?dir='.$valueA.'">';
                echo $value."</a></td>";
            }else{
                echo '<img src="../file.jpg"  width="50" height="50" />';
                echo "</td><td>";
                echo $value."</td>";
            }
            echo "</tr>";
        }  
    }
    echo "</table>";

?>
