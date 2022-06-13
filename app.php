<?php $srcDir = dirname(__FILE__) .'\src'; ?>
<?php $configDir = dirname(__FILE__) .'\config'; ?>
<?php $loginDir = dirname(__FILE__) .'\login_register'; ?>
<?php $partialDir = dirname(__FILE__) .'\_partial'; ?>
<!doctype html>
<html lang="pl">

    <?php require $partialDir."\head.php"; ?>
<body>

<?php require $loginDir."\home.php"; ?>
<h1>Witaj użytkowniku na tej stronie dodasz nowe rachunki do bazy danych</h1>
<?php require $partialDir."\menu.php"; ?>



<?php require $configDir."\database.php"; ?>

<?php require $srcDir."\addBill.php"; ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php

mysqli_close($conn);
?>
</body>
</html>

