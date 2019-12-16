<?php
    @session_start();

    if(isset($_SESSION['cur_path'])){

        if(isset($_GET['dir'])){

            $mainDir = $_SESSION['cur_path'];
            $chDir = $_GET['dir'];

            if($chDir == "-1"){

                if(isset( $_SESSION['def_path'])){

                    if($mainDir != $_SESSION['def_path']){

                        $subdir = explode('/', $mainDir, -1);

                        $new_dir = "";
        
                        foreach ($subdir as $value) {
                            if($value != ""){
                                $new_dir = $new_dir."/".$value;
                            }
                        }
        
                        $_SESSION['cur_path'] = $new_dir;
                    }
                }
            }else{
                $_SESSION['cur_path'] =  $_SESSION['cur_path']."/".$chDir;
            }
        }
    }
    header("location:usbSearch.php");
?>
