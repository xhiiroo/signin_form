<?php

session_start();

include_once("function/helper.php");
include_once("function/connection.php");

// Get a filename
$page = isset($_GET['page']) ? $_GET['page'] : false;

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
$name = isset($_SESSION['name']) ? $_SESSION['name'] : false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . "css/style.css"; ?>" type="text/css">
</head>

<body>
    <div id="container">
        <div id="content">
            <?php
            $filename = "$page.php";

            if (file_exists($filename)) {
                include_once($filename);
            } else if ($user_id) {
                include_once("home.php");
            } else {
                include_once("form.php");
            }
            ?>
        </div>

    </div>
</body>

</html>