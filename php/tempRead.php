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
    <script src="../js/d3.v3.min.js"></script>
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
                    <?php
                        if(isset($_SESSION['lvl']) && $_SESSION['lvl'] < 4){
                    ?>   
                      <td>
                          <ul> 
                            <a href="javascript:void(0)" onclick="">
                              <li>Generate graph</li>
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
            <div id=graph>
                <h1>Test</h1>
            </div>
                
            <p  id=return><a href="#top">Top of the page</a></p>
        </div>
    </div>
</body>
</html>