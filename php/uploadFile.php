<?php
@session_start();

$dir_access = $_SESSION['cur_path'];

$dir_access = explode('/mnt/sda1/', $dir);

$dir = "../usb/";

if($dir_access[1] != ""){
    $dir = $dir.$dir_access[1]."/";
}

if(isset($_SESSION['lvl']) && $_SESSION['lvl'] < 3){
    if(isset($_FILES["uFile"])){
        $errors= array();
        $file_name = $_FILES['uFile']['name'];
        $file_size = $_FILES['uFile']['size'];
        $file_tmp = $_FILES['uFile']['tmp_name'];
        $file_type = $_FILES['uFile']['type'];
        
        if($file_size > 52428800) {
           $errors[]='File size must be excately 50 MB';
        }
        
        if(empty($errors)==true) {
           move_uploaded_file($file_tmp, $dir .$file_name);
           echo "Success";
        }else{
           print_r($errors);
        }
    }else{
        echo "File doesn't exist";
    }
}else{
    echo "Debug";
}
?>
