<?php
require_once "constants.php";
$link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
mysqli_query($link, "SET CHARACTER SET utf8");
mysqli_set_charset($link, 'utf8');
?>