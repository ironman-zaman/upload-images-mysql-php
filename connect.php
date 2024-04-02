<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "upload_image";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("something went wrong");
}
?>