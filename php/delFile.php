<?php 
@session_start();

if(isset($_SESSION['lvl']) && $_SESSION['lvl'] < 2){
    $dir_cur = $_SESSION['cur_path'];

    $dir_access = explode('/mnt/sda1/', $dir_cur);

    $dir = "../usb/";

    if($dir_access[1] != ""){
        $dir = $dir.$dir_access[1]."/";
    }

    if(isset($_GET['flName'])){

        $flName = $_GET['flName'];  
        
        $fl = $dir.$flName;

        if (!unlink($fl)) {  
            echo ("$fl cannot be deleted due to an error");  
        }  
        else {  
            echo ("$fl has been deleted");  
        }  
    }
}

header("location:usbSearch.php");
?>  
