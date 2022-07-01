<?php $partialDir = dirname(__FILE__) .'\_partial'; ?>
<?php $srcDir = dirname(__FILE__) .'\src'; ?>
<?php $configDir = dirname(__FILE__) .'\config'; ?>
<?php $loginDir = dirname(__FILE__) .'\login_register'; ?>

<!doctype html>
<html lang="pl">

    <?php require $partialDir."\head.php"; ?>
<body>
<?php
require  $loginDir."\login.php";

if(!isset($_SESSION["user"]) || $_SESSION["user"] !== true){
header('location:'.$loginDir .'\login.php');
exit;
}
?>

</body>
</html>

