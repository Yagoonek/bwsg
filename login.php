<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //lol
    $_SESSION['username'] = $_POST['username'];
    header("Location: index.html");
    exit();
}
?>
