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
        function uploadFile(a){
                if(a==1)
                    document.getElementById("upload").style.display="none";
                else
                    document.getElementById("upload").style.display="block";
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
                      <td>
                          <ul> 
                            <a href="javascript:void(0)" onclick="uploadFile(2)">
                              <li>Upload file</li>
                            </a>
                          </ul>
                      </td>
                      <td >
                          <ul>
                              <a href="deleteFile.php">
                                  <li>Delete file</li>
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

        <div id="upload">
            <h2> Upload file</h2>
            <form action="uploadFile.php" method="post">
                Select file to upload:<br>
                <br>
                <input type="file" name="fileToUpload"  id="fileToUpload">
                <br><br>
                <input type="submit" value="Upload file" name="submit">
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