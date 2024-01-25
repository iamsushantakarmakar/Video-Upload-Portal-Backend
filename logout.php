<?php
session_start();
session_destroy();
$_SESSION['uname']=="";
header ('location:index.php');
?>