<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "mystartup";

$connection = mysqli_connect($server, $username, $password, $database) or die("The Database Connection was error");
