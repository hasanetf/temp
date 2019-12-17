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
            <h1 align="center" title="Name of the page">Read temperature
                <a href="top"></a>
            </h1>
            <div id="nav"> <table >
                  <tr>
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
            <div id=graph>                
                <iframe src="itempRead.php" height="200" width="1500"></iframe> 
            </div>
                
            <p  id=return><a href="#top">Top of the page</a></p>
        </div>
    </div>
</body>
</html>