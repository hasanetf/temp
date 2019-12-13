<?php
		@session_start();
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;" charset=UTF-8”>
        <title>Login page</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/stil1.css">

    </head>
<body>
    <div class="main_div" id="div1">
        <header> 
            <div class="logo" id="logo" align="center">
                <img src="../control4.png" />
            </div>
        </header>
        <div class="body_div" id="body_div">
            <h1 align="center" title="Name of the page">Manage users
                <a href="top"></a>
            </h1>

            <?php
                if($_SESSION['lvl'] == 0){
            ?>

            <div id="nav"> <table >
                  <tr>
                      <td>
                          <ul> 
                            <a href="usrManage.php?dbRead=1">
                              <li>List all users</li>
                            </a>
                          </ul>
                      </td>
                      <td >
                          <ul>
                              <a href="deldb.php">
                                  <li>Delete all users</li>
                              </a>
                          </ul>
                      </td>
                      <td >
                          <ul>
                              <a href="../index.php">
                                  <li>Home page</li>
                              </a>
                          </ul>
                      </td>
                  </tr>
              </table>
            </div>

            <div class="wrapper">
                <?php
                    if(isset($_GET['dbRead'])){
                        $db = new SQLite3('/www/temp/control4.db') or die('Unable to open database');
                        $statement = $db->prepare('SELECT * FROM C4users;');
                        $result = $statement->execute();
                        echo '<table id="tbl"><caption> List of users </caption>   
                            <tr id="tbl">  
                                <th id="tbl"> Username </th> 
                                <th id="tbl"> Password </th> 
                                <th id="tbl"> Permission level </th>
                                <th id="tbl"> Level up </th>
                                <th id="tbl"> Level down </th>
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
                            $usrID = $row['id'];
                            echo '</td><td><a href="lvlchg.php?lvl=+&id='.$usrID.'">+</a></td>';
                            echo '<td><a href="lvlchg.php?lvl=-&id='.$usrID.'">-</a></td></tr>';
                        }
                        echo "</table>";

                        $db->close();
                    }
                ?>

            <p  id=return><a href="#top">Top of the page</a></p>
          <?php
            }
          ?>
        </div>
    </div>
</body>
</html>