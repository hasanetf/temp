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
                        echo '<h2 align="center">Incorrect login <br/>Username is taken</h2>';
                    }else{
                        echo '<h2 align="center">Registration is succsessful</h2>';
                    }
                }
            ?>
           
            <?php 
            if(isset($_SESSION['user'])){
                include("html/logout.html");
            }else{
                include("php/LogReg.php");
            }
            ?>
            
            <div class="wrapper">
                <?php
                    if(isset($_GET['dbRead'])){
                        $dbRead = $_GET['dbRead'];
                    }else{
                        $dbRead = 0;
                    }
                    if($dbRead == 1){
                        $db = new SQLite3('/www/temp/control4.db') or die('Unable to open database');
                        $statement = $db->prepare('SELECT * FROM C4users;');
                        $result = $statement->execute();
                        echo '<table id="tbl"><caption> List of users </caption>   
                            <tr id="tbl">  
                                <th id="tbl"> Username </th> 
                                <th id="tbl"> Password </th> 
                                <th id="tbl"> Permission level </th>
                            </tr> ';

                        while ($row = $result->fetchArray()){
                            echo "<tr><td>{$row['username']}</td>
                            <td>{$row['passwrd']}</td>
                            <td>";

                            switch($row['lvl']){
                                case 0:
                                    echo "Admin";
                                break;
                                case 1:
                                    echo "Editor";
                                break;
                                case 2:
                                    echo "Contributor";
                                break;
                                case 3:
                                    echo "Subscriber";
                                break;
                                default:
                                echo "Undefinded";
                            }
                            
                            echo "</td></tr>";
                        }
                        echo "</table>";

                        $db->close();
                    }
                ?>
                <div class="button_wrapper">
                    <button onclick="window.location.href = 'index.php?dbRead=1';">Read users</button>
                </dev>
            </div>

            <div class="form2" align="center">
                <form action="php/deldb.php">
                    <input type="submit" value="Delete tables">
                </form> 
            </div>


            <p align="center"><a href="secondPage.php">Next page</a></p>
            <p align="center"><a href="https://google.com/">Google</a></p>
            <p  id=return><a href="#top">Top of the page</a></p>
        </div>
    </div>

</body>
</html>

