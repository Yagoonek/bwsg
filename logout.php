<?php
session_start();
//lol2
unset($_SESSION['username']);
header("Location: index.html");
exit();
?>
