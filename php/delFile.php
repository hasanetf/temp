<?php 
@session_start();

 function delTree($dir) {
    $files = array_diff(scandir($dir), array('.','..'));
     foreach ($files as $file) {
       (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
     }
     return rmdir($dir);
} 

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
        if(is_dir($fl)){
            if(!delTree($fl)){
                echo ("$fl cannot be deleted due to an error"); 
            }
        }else{
            if (!unlink($fl)) {  
                echo ("$fl cannot be deleted due to an error");  
            } 
        }
    }
}
header("location:usbSearch.php");
?>  
