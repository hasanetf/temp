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
            <h1 align="center" title="Name of the page">Signup <br/> page
                <a href="top"></a>
            </h1>
            <div class="form" align="center">
                <form action="php/signup.php">
                    Username:<br>
                    <input type="text" name="username">
                    <br>
                    Password:<br>
                    <input type="text" name="password">
                    <br><br>
                    <input type="submit" value="Signup">
                </form> 
            </div>

            <div class="form2" align="center">
                <form action="php/readdb.php">
                    <input type="submit" value="Read database">
                </form> 
            </div>

            <div class="form2" align="center">
                <form action="php/deldb.php">
                    <input type="submit" value="Delete database">
                </form> 
            </div>


            <p align="center"><a href="secondPage.php">Next page</a></p>
            <p align="center"><a href="https://google.com/">Google</a></p>
            <p  id=return><a href="#top">Top of the page</a></p>
        </div>
    </div>

</body>
</html>
