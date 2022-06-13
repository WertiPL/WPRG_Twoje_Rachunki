<?php
session_start();
session_destroy();
$mainDir = "\WPRG\WPRG_Twoje_Rachunki";
$loginDir = $mainDir. '\login_register';
header('location: '. $loginDir .'\login.php');
?>