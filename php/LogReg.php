<div class="form" align="center">
    <fieldset>
    <?php
        if(isset($_SESSION['isUser'])){
                $usr = $_SESSION['isUser'];
            }else{
                $_SESSION['isUser'] = "0";
        }
        if ($usr == "-1"){
            echo "<legend>Personal information: User exists</legend>";

        }else{
            echo "<legend>Personal information:</legend>";
        }
    ?>
        <form action="php/signup.php" method="post">
            Username:<br>
            <input type="text" name="username">
            <br>
            Password:<br>
            <input type="text" name="password">
            <br><br>
            <input type="submit" value="Signup">
        </form>
    </fieldset>
</div>

