<?php
// session_destroy();
// header('Location: Home.php');
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: Home.php');
die;
?>