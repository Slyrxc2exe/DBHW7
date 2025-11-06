<?php
session_start();
if (!isset($_SESSION['username'])) {
    die("<h2>Unauthorized access. Please <a href='login.php'>log in</a>.</h2>");
}
?>