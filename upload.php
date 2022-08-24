<?php require_once 'header.php' ?>

<div class="hidden-wrapper">
    <div class="hidden-h1">
        <h1 class="h1-login">UPLOAD</h1>
    </div>
    <div class="holder" id="holder">
        <div class="form-container upload-container">
            <?php

            if (isset($_SESSION["id"])) {
                echo '<form action="includes/upload.inc.php" method="post">
                <input type="text" placeholder="Video Name" name="name">
                <input type="text" placeholder="Video Link" name="link">
                <input type="text" placeholder="Video Code" name="code">
                <input type="text" placeholder="Video Date" name="date">
                <button type="submit" name="submit">Upload Video</button>
                <a href="includes/logout.inc.php">Log Out</a>
                </form>';
            } else {
                echo '<p>You Must Be Logged In To Upload</p>';
                echo '<a href="login.php"><button>Login</button></a>';
            }

            ?>

        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='errors'>*Fill In All Fields.*</p>";
            } elseif ($_GET["error"] == "none") {
                echo "<p class='errors'>Video Uploaded Successfully.</p>";
            }
        }

        ?>
    </div>

    <?php require_once 'footer.php' ?>