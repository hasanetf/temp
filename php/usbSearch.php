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
    <script>
        function uploadFile(a,b){
                if(a==1)
                    document.getElementById(b).style.display="none";
                else
                    document.getElementById(b).style.display="block";
            }
    </script>
    <div class="main_div" id="div1">
        <header> 
            <div class="logo" id="logo" align="center">
                <img src="../control4.png" />
            </div>
        </header>
        <div class="body_div" id="body_div">
            <h1 align="center" title="Name of the page">Browse USB Flash Drive
                <a href="top"></a>
            </h1>
            <div id="nav"> <table >
                  <tr>
                    <?php
                        if(isset($_SESSION['lvl']) && $_SESSION['lvl'] < 3){
                    ?>   
                      <td>
                          <ul> 
                            <a href="javascript:void(0)" onclick="uploadFile(2,'upload')">
                              <li>Upload file</li>
                            </a>
                          </ul>
                      </td>
                    <?php
                        }
                        
                        if(isset($_SESSION['lvl']) && $_SESSION['lvl'] < 3){
                    ?>
                      <td >
                          <ul>
                              <a href="javascript:void(0)" onclick="uploadFile(2,'mkdir')">
                                  <li>Make folder</li>
                              </a>
                          </ul>
                      </td>
                    <?php
                        }
                    ?>
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

            <div id="upload">
                <h2> Upload file</h2>
                <form action="uploadFile.php" method="POST" enctype = "multipart/form-data">
                    Select file to upload:<br>
                    <br>
                    <input type="file" name="uFile">
                    <br><br>
                    <input type="submit" value="Upload file" name="submit">
                </form>
            </div>

            <div id="mkdir">
                <h2> Folder creation</h2>
                <form action="makeFolder.php" method="POST">
                    Folder name:<br>
                    <br>
                    <input type="text" name="flName">
                    <br><br>
                    <input type="submit" value="Create folder">
                </form>
            </div>

            <div class="wrapper"> 
                <?php include("brwFiles.php");
                ?>
            </div>
            <p  id=return><a href="#top">Top of the page</a></p>
        </div>
    </div>
</body>
</html>