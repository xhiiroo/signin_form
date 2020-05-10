<?php

include_once("function/helper.php");
include_once("function/connection.php");

$username = $_POST['username'];
$password = md5($_POST['password']);

// Select the column table on database by user input
$user_signin = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' AND password='$password'");

// Scanning the number of user inside database, if 0 it means the user are not found
if (mysqli_num_rows($user_signin) == 0) {
    // Mention to index.php and give a little notification
    header("location:" . BASE_URL . "index.php?page=form&notif=true");
} else {
    $row = mysqli_fetch_assoc($user_signin);

    session_start();

    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['name'] = $row['name'];

    header("location:" . BASE_URL . "index.php?page=home");
}
