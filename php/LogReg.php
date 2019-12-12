<div class="form" align="center">
    <fieldset>
    <legend>Personal information:</legend>
    <div class="login">
        <h2> Login </h2>
        <form action="php/signup.php?login=1" method="post">
            Username:<br>
            <input type="text" name="username">
            <br>
            Password:<br>
            <input type="text" name="password">
            <br><br>
            <input type="submit" value="Login">
        </form>
    </div>
    <div class="join">
        <h2> Register </h2>
        <form action="php/signup.php?reg=1" method="post">
            Username:<br>
            <input type="text" name="username">
            <br>
            Password:<br>
            <input type="text" name="password">
            <br><br>
            <input type="submit" value="Join now">
        </form>
    </div>
    </fieldset>
</div>
