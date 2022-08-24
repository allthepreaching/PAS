<?php require_once 'header.php' ?>

<div class="hidden-wrapper">
    <div class="hidden-h1">
        <h1 class="h1-login">LOGIN</h1>
    </div>
    <div class="holder" id="holder">
        <div class="form-container sign-in-container">
            <form action="includes/login.inc.php" method="post">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="pwd">
                <a class="a-login-forgot-pwd" href="#">Forgot Password</a>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='errors'>*Fill In All Fields.*</p>";
            } elseif ($_GET["error"] == "emailerror") {
                echo "<p class='errors'>*Invalid Email.*</p>";
            } elseif ($_GET["error"] == "pwderror") {
                echo "<p class='errors'>*Invalid Password.*</p>";
            } elseif ($_GET["error"] == "none") {
                echo "<p class='errors'>Logged In Successfully.</p>";
            }
        }

        ?>
    </div>
</div>

<?php require_once 'footer.php' ?>