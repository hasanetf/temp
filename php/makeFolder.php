<?php
@session_start();

$dir_cur = $_SESSION['cur_path'];

$dir_access = explode('/mnt/sda1/', $dir_cur);

$dir = "../usb/";

if($dir_access[1] != ""){
    $dir = $dir.$dir_access[1]."/";
}

if($_SESSION['lvl'] < 3){
    if(isset($_GET['flName'])){

        $flName = $_GET['flName'];  
        $fl = $dir.$flName;
        if (!mkdir($fl, 0777, true)) {
            die('Failed to create folders...');
        }

    }
}
?> 