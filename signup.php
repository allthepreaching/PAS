<?php require_once 'header.php' ?>
<div class="hidden-wrapper">
    <div class="hidden-h1">
        <h1 class="h1-login">SIGN UP</h1>
    </div>
    <div class="holder" id="holder">
        <div class="form-container sign-in-container">
            <form action="includes/signup.inc.php" method="post">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="pwd">
                <input type="password" placeholder="Password Confirm" name="pwd2">
                <button type="submit" name="submit">Create User</button>
            </form>

        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='errors'>*Fill In All Fields.*</p>";
            } elseif ($_GET["error"] == "invalidemail") {
                echo "<p class='errors'>*Invalid Email.*</p>";
            } elseif ($_GET["error"] == "passworderror") {
                echo "<p class='errors'>*Passwords Do Not Match.*</p>";
            } elseif ($_GET["error"] == "emailexists") {
                echo "<p class='errors'>*Email Already Exists.*</p>";
            } elseif ($_GET["error"] == "stmtfailed") {
                echo "<p class='errors'>*Something Went Wrong.*</p>";
            } elseif ($_GET["error"] == "none") {
                echo "<p class='errors'>User Created Successfully.</p>";
            }
        }

        ?>
    </div>
</div>

<?php require_once 'footer.php' ?>