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

            echo '<tr><td  width="40">';
            if($detDir){
                echo '<a href="updatePath.php?dir='.$valueA.'">';
                if($valueA != "-1"){
                    echo '<img src="../folder.jpeg"  width="30" height="30" />';
                }else{
                    echo '<img src="../back.jpg"  width="30" height="30" />';
                }
                echo "</a>";
                
                echo "</td><td>";

                echo '<a href="updatePath.php?dir='.$valueA.'">';
                echo $value."</a></td>";
            }else{
                #echo '<a href="'.$dir.'/'.$valueA.' download">';
                echo '<a href="../usb/results.txt" download">';
                echo '<img src="../file.png"  width="30" height="30" />';
                echo "</a>";
                echo "</td><td>";
                echo '<a href="'.$dir.'/'.$valueA.' download">';
                echo $value."</a></td>";
            }
            echo "</tr>";
        }  
    }
    echo "</table>";

?>
