<?php
		@session_start();
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;" charset=UTF-8”>
        <title>Login page</title>
        
        <link rel="stylesheet" type="text/css" href="CSS/stil1.css">

    </head>
<body>
<?php include("php/dbCreate.php")?>
    <div class="main_div" id="div1">
        <header> 
            <div class="logo" id="logo" align="center">
                <img src="control4.png" />
            </div>
        </header>
        <div class="body_div" id="body_div">
            <h1 align="center" title="Name of the page">Raspberry Pi 3 <br/> Web Page
                <a href="top"></a>
            </h1>

            <?php
                if(isset($_SESSION['isUser'])){               
                    if ($_SESSION['isUser'] == "-1"){
                        echo '<h2 align="center">Username is taken</h2>';
                    }elseif ($_SESSION['isUser'] == "-2"){
                        echo '<h2 align="center">Incorrect username or password </h2>';
                    }elseif ($_SESSION['isUser'] == "1"){
                        echo '<h2 align="center">Registration is succsessful</h2>';
                    }
                }
            ?>
           
            <?php 
            if(isset($_SESSION['user'])){
                include("html/header.html");
            }else{
                include("php/LogReg.php");
            }
            ?>
            
            <p id=return><a href="https://google.com/">Google</a></p>
            <p  id=return><a href="#top">Top of the page</a></p>
        </div>
    </div>

</body>
</html>

