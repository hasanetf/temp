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
            <h1 align="center" title="Name of the page">Browse USB Flash Drive
                <a href="top"></a>
            </h1>
            <div id="nav"> <table >
                  <tr>
                      <td>
                          <ul> 
                            <a href="uploadFile.php">
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

            <div class="wrapper"> 
                <?php
                    $dir    = '/mnt/sda1';
                    $files1 = scandir($dir);
                    foreach($files1 as $value){
                        echo "DIR ".$value."<br/>";
                    }

                    $files2 = scandir($dir, 1);

                    print_r($files1);
                    print_r($files2);
                ?>
            </div>
            <p  id=return><a href="#top">Top of the page</a></p>
        </div>
    </div>
</body>
</html>