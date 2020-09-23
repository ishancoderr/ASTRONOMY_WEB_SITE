<?php
session_start();
session_destroy();
$home_url = 'front1.php' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
header('Location: front1.php' );
?>
