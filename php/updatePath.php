<?php
    @session_start();

    if(isset($_SESSION['sub_path'])){
        $subDir = $_SESSION['sub_path'];
    }
    
    if(isset($_SESSION['cur_path'])){

        if(!isset($_GET['dir'])){

            $mainDir = $_SESSION['cur_path'];
            $chDir = $_GET['dir'];

            if($chDir == "-1"){
                if($mainDir != $_SESSION['def_path']){
                    $_SESSION['cur_path'] = substr($mainDir,0, -1*(strlen($subDir)+1));
                }
            }else{
                $_SESSION['sub_path'] =  $chDir;
                $_SESSION['cur_path'] =  $_SESSION['cur_path']."/".$chDir;
            }
        }
    }
    header("location:brwFiles.php");
?>
