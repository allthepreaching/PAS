<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwd2 = $_POST["pwd2"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($email, $pwd, $pwd2) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (InvalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (emptyPwdMatch($pwd, $pwd2) !== false) {
        header("location: ../signup.php?error=passworderror");
        exit();
    }
    if (emailExists($conn, $email) !== false) {
        header("location: ../signup.php?error=emailexists");
        exit();
    }
    createUser($conn, $email, $pwd);
} else {
    header("location: ../signup.php?error=else");
    exit();
}
